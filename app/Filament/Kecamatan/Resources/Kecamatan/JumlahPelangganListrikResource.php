<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPelangganListrikResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPelangganListrikResource\RelationManagers;
use App\Models\JumlahPelangganListrik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;

class JumlahPelangganListrikResource extends Resource
{
    protected static ?string $model = JumlahPelangganListrik::class;

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
                TextInput::make('jumlah_penduduk')->label('Jumlah Penduduk')
                    ->numeric()
                    ->required(),
                TextInput::make('pln')->label('Jumlah PLN')
                    ->numeric()
                    ->required(),
                TextInput::make('non_pln')->label('Jumlah NON PLN')
                    ->numeric()
                    ->placeholder('Kosongkan Jika Tidak Ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jumlah_penduduk')->label('Jumlah Penduduk'),
                TextColumn::make('pln')->label('PLN'),
                TextColumn::make('non_pln')->label('NON PLN'),
                TextColumn::make('jumlah_pln')
                    ->label('Jumlah PLN')
                    ->getStateUsing(fn($record) => $record->pln + $record->non_pln)
                    ->sortable(),
                TextColumn::make('rasio_pln')
                    ->label('Rasio PLN (%)')
                    ->getStateUsing(function ($record) {
                        // Pastikan jumlah penduduk tidak nol untuk menghindari pembagian dengan nol
                        if ($record->jumlah_penduduk > 0) {
                            return round(($record->pln / $record->jumlah_penduduk) * 100, 2) . ' %';
                        }
                        return '0 %';
                    })
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
            'index' => Pages\ListJumlahPelangganListriks::route('/'),
            'create' => Pages\CreateJumlahPelangganListrik::route('/create'),
            'edit' => Pages\EditJumlahPelangganListrik::route('/{record}/edit'),
        ];
    }
}
