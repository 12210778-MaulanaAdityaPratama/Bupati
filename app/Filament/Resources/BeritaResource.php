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

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_berita'),
                TextInput::make('isi_berita'),
                FileUpload::make('gambar')
                    ->image() // Validasi bahwa file yang diupload adalah gambar
                    ->directory('berita-images') // Menyimpan gambar di direktori `storage/app/public/berita-images`

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
                    ->sortable(),
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->gambar_url) // Mengambil URL dari accessor
                    ->height(200)
                    ->square() // Opsional: Tampilkan gambar berbentuk persegi
                    ->sortable(),
                textColumn::make('created_at')
                    ->label('Create')
                    ->dateTime('d-m-Y')
                    ->sortable(),
                textColumn::make('updated_at')
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
