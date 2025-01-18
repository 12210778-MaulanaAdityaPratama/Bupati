<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\TanahPerkebunanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\TanahPerkebunanResource\RelationManagers;
use App\Models\TanahPerkebunan;
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

class TanahPerkebunanResource extends Resource
{
    protected static ?string $model = TanahPerkebunan::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
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
                TextInput::make('kelapa')->label('Jumlah Kelapa (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('karet')->label('Jumlah Karet (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kelapa_sawit')->label('Jumlah Kelapa Sawit (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('coklat')->label('Jumlah Coklat (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('tebu')->label('Jumlah Tebu (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('pinang')->label('Jumlah Pinang (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('sagu')->label('Jumlah Sagu (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('pala')->label('Jumlah Pala (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kopi')->label('Jumlah Kopi (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('sahang')->label('Jumlah Sahang (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kelapa')->label('Jumlah Kelapa (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('karet')->label('Jumlah Karet (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('kelapa_sawit')->label('Jumlah Kelapa Sawit (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('coklat')->label('Jumlah Coklat (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('tebu')->label('Jumlah Tebu (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('pinang')->label('Jumlah Pinang (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('sagu')->label('Jumlah Sagu (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('pala')->label('Jumlah Pala (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('kopi')->label('Jumlah Kopi (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('sahang')->label('Jumlah Sahang (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
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
            'index' => Pages\ListTanahPerkebunans::route('/'),
            'create' => Pages\CreateTanahPerkebunan::route('/create'),
            'edit' => Pages\EditTanahPerkebunan::route('/{record}/edit'),
        ];
    }
}
