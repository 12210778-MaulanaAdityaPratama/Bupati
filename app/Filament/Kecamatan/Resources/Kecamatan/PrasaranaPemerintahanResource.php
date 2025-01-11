<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahanResource\RelationManagers;
use App\Models\PrasaranaPemerintahan;
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

class PrasaranaPemerintahanResource extends Resource
{
    protected static ?string $model = PrasaranaPemerintahan::class;

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
                TextInput::make('nama')->label('Nama Prasarana')
                    ->required(),
                TextInput::make('jumlah')->label('Jumlah')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('baik')->label('Baik')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('ringan')->label('Rusak Ringan')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('berat')->label('Rusak Berat')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama Prasarana'),
                TextColumn::make('jumlah')->label('Jumlah'),
                TextColumn::make('baik')->label('Baik'),
                TextColumn::make('ringan')->label('Rusak Ringan'),
                TextColumn::make('berat')->label('Rusak Berat'),
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
            'index' => Pages\ListPrasaranaPemerintahans::route('/'),
            'create' => Pages\CreatePrasaranaPemerintahan::route('/create'),
            'edit' => Pages\EditPrasaranaPemerintahan::route('/{record}/edit'),
        ];
    }
}
