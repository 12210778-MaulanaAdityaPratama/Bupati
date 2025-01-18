<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BiodataCamat;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Kecamatan\Resources\Kecamatan\BiodataCamatResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\BiodataCamatResource\RelationManagers;

class BiodataCamatResource extends Resource
{
    protected static ?string $model = BiodataCamat::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kecamatan', auth()->user()->kecamatan->kecamatan);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kecamatan')
                    ->label('Kecamatan')
                    ->required()
                    ->options(function () {
                        // Ambil kecamatan yang sedang login
                        $kecamatanLogin = auth()->user()->kecamatan->kecamatan;

                        // Mengembalikan kecamatan yang sesuai
                        return [
                            $kecamatanLogin => $kecamatanLogin, // Menampilkan kecamatan pengguna yang login
                        ];
                    }),
                TextInput::make('nama')->label('Nama'),
                TextInput::make('alamat')->label('Alamat'),
                TextInput::make('tempat')->label('Tempat Lahir'),
                DatePicker::make('tanggal_lahir')->label('Tanggal Lahir'),
                Select::make('pendidikan')->label('Pendidikan Terakhir')
                    ->options([
                        'SD' => 'SD',
                        'SLTP' => 'SLTP',
                        'SLTA' => 'SLTA',
                        'D3' => 'D3',
                        'D4' => 'D4',
                        'S1' => 'S1',
                        'S2' => 'S2',
                        'S3' => 'S3',
                    ]),
                FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('biodata-camat')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('alamat')->label('Alamat'),
                TextColumn::make('tempat')->label('Tempat Lahir'),
                TextColumn::make('tanggal_lahir')->label('Tanggal Lahir'),
                TextColumn::make('pendidikan')->label('Pendidikan Terakhir'),
                ImageColumn::make('foto')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->foto_url) // Mengambil URL dari accessor
                    ->height(200)
                    ->square() // Opsional: Tampilkan gambar berbentuk persegi
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBiodataCamats::route('/'),
            'create' => Pages\CreateBiodataCamat::route('/create'),
            'edit' => Pages\EditBiodataCamat::route('/{record}/edit'),
        ];
    }
}
