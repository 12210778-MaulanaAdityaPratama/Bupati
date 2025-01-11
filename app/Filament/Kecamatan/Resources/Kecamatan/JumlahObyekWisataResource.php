<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahObyekWisataResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\JumlahObyekWisataResource\RelationManagers;
use App\Models\JumlahObyekWisata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;

class JumlahObyekWisataResource extends Resource
{
    protected static ?string $model = JumlahObyekWisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Profile Kecamatan';
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
                Repeater::make('nama_obyek')
                    ->label('Nama Objek Wisata')
                    ->schema([
                        TextInput::make('nama')->label('Nama Objek')
                            ->required(),
                    ])
                    ->columns(1),
                TextInput::make('jumlah')
                    ->label('Jumlah Total') // Label tetap bisa ada jika diperlukan
                    ->numeric() // Tetapkan tipe data numerik
                // Berikan nilai default 0, // Sembunyikan input dari pengguna

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_obyek')
                    ->label('Nama Objek Wisata')
                    ->formatStateUsing(function ($state) {
                        // Jika $state sudah berbentuk array, proses langsung
                        if (is_array($state)) {
                            // Ambil nilai 'nama' dari setiap elemen array
                            $namaObyekList = array_column($state, 'nama');
                            return implode(', ', $namaObyekList); // Gabungkan dengan koma
                        }

                        // Jika $state berupa JSON string, decode menjadi array
                        $decoded = json_decode($state, true);
                        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                            $namaObyekList = array_column($decoded, 'nama');
                            return implode(', ', $namaObyekList); // Gabungkan dengan koma
                        }

                        // Jika bukan array atau JSON, tampilkan data mentah
                        return $state;
                    }),


                TextColumn::make('jumlah')
                    ->label('Jumlah Nama')


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
            'index' => Pages\ListJumlahObyekWisatas::route('/'),
            'create' => Pages\CreateJumlahObyekWisata::route('/create'),
            'edit' => Pages\EditJumlahObyekWisata::route('/{record}/edit'),
        ];
    }
}
