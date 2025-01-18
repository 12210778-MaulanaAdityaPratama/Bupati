<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\PangkatdanGolonganResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\PangkatdanGolonganResource\RelationManagers;
use App\Models\PangkatdanGolongan;
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

class PangkatdanGolonganResource extends Resource
{
    protected static ?string $model = PangkatdanGolongan::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
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
                TextInput::make('i')->label('Golongan I')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('ii')->label('Golongan II')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('iii')->label('Golongan III')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('iv')->label('Golongan IV')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('i')->label('Golongan I'),
                TextColumn::make('ii')->label('Golongan II'),
                TextColumn::make('iii')->label('Golongan III'),
                TextColumn::make('iv')->label('Golongan IV'),
                TextColumn::make('Jumlah')->label('Jumlah')
                    ->getStateUsing(fn(PangkatdanGolongan $record) => $record->jumlah()),
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
            'index' => Pages\ListPangkatdanGolongans::route('/'),
            'create' => Pages\CreatePangkatdanGolongan::route('/create'),
            'edit' => Pages\EditPangkatdanGolongan::route('/{record}/edit'),
        ];
    }
}
