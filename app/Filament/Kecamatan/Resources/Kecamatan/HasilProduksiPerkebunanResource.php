<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\HasilProduksiPerkebunanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\HasilProduksiPerkebunanResource\RelationManagers;
use App\Models\HasilProduksiPerkebunan;
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

class HasilProduksiPerkebunanResource extends Resource
{
    protected static ?string $model = HasilProduksiPerkebunan::class;

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
                TextInput::make('jenis_perkebunan')->label('Jenis Perkebunan'),
                TextInput::make('jumlah')->label('Jumlah(Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_perkebunan')->label('Jenis Perkebunan'),
                TextColumn::make('jumlah')->label(
                    'Jumlah(Ha)'
                )
                    ->formatStateUsing(fn($state) => $state . ' Ha')
                    ->numeric(),
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
            'index' => Pages\ListHasilProduksiPerkebunans::route('/'),
            'create' => Pages\CreateHasilProduksiPerkebunan::route('/create'),
            'edit' => Pages\EditHasilProduksiPerkebunan::route('/{record}/edit'),
        ];
    }
}
