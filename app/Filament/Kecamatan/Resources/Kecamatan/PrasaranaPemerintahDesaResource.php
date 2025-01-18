<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahDesaResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahDesaResource\RelationManagers;
use App\Models\PrasaranaPemerintahDesa;
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

class PrasaranaPemerintahDesaResource extends Resource
{
    protected static ?string $model = PrasaranaPemerintahDesa::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
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
                TextInput::make('nama')->label('Nama')
                    ->required(),
                Select::make('keterangan')->label('Keterangan')->options([
                    'Tersedia' => 'Tersedia',
                    'Tidak Tersedia' => 'Tidak Tersedia',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('keterangan')->label('Keterangan'),


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
            'index' => Pages\ListPrasaranaPemerintahDesas::route('/'),
            'create' => Pages\CreatePrasaranaPemerintahDesa::route('/create'),
            'edit' => Pages\EditPrasaranaPemerintahDesa::route('/{record}/edit'),
        ];
    }
}
