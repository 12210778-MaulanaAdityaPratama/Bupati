<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;
use Dompdf\FrameDecorator\Text;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_berita'),
                RichEditor::make('isi_berita')
                    ->toolbarButtons([

                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                // FileUpload::make('gambar')
                //     ->image() // Validasi bahwa file yang diupload adalah gambar
                //     ->directory('berita-images') // Menyimpan gambar di direktori `storage/app/public/berita-images`
                Repeater::make('gambarBerita') // Menggunakan Repeater untuk multiple upload
                    ->relationship('gambarBerita')
                    ->schema([
                        FileUpload::make('gambar')
                            ->image()
                            ->directory('berita-images')
                            ->required()
                            ->imageCropAspectRatio('16:9')
                            ->imageResizeTargetWidth('600')
                            ->imageResizeTargetHeight('400'),
                    ])
                    ->minItems(1)
                    ->maxItems(5), // Bisa diatur sesuai kebutuhan

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_berita')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('isi_berita')
                    ->searchable()
                    ->sortable()
                    ->limit(20),
                // ImageColumn::make('gambar')
                //     ->label('Gambar')
                //     ->getStateUsing(fn($record) => $record->gambar_url) // Mengambil URL dari accessor
                //     ->height(200)
                //     ->square() // Opsional: Tampilkan gambar berbentuk persegi
                //     ->sortable(),
                ImageColumn::make('gambarBerita.gambar') // Ambil gambar dari relasi
                    ->stacked() // Menampilkan banyak gambar dalam satu kolom
                    ->limit(3) // Bisa diatur
                    ->circular(),
                TextColumn::make('created_at')
                    ->label('Create')
                    ->dateTime('d-m-Y')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Update')
                    ->dateTime('d-m-Y')
                    ->sortable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
