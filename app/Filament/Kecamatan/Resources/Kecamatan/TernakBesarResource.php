<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakBesarResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\TernakBesarResource\RelationManagers;
use App\Models\TernakBesar;
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

class TernakBesarResource extends Resource
{
    protected static ?string $model = TernakBesar::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

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
                TextInput::make('sapi')->label('Jumlah Sapi')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kerbau')->label('Jumlah Kerbau')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kuda')->label('Jumlah Kuda')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sapi')->label('Jumlah Sapi'),
                TextColumn::make('kerbau')->label('Jumlah Kerbau'),
                TextColumn::make('kuda')->label('Jumlah Kuda'),
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
            'index' => Pages\ListTernakBesars::route('/'),
            'create' => Pages\CreateTernakBesar::route('/create'),
            'edit' => Pages\EditTernakBesar::route('/{record}/edit'),
        ];
    }
}
