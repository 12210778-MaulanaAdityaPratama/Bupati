<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LuasWilayah;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LuasWilayahResource\Pages;
use App\Filament\Resources\LuasWilayahResource\RelationManagers;

class LuasWilayahResource extends Resource
{
    protected static ?string $model = LuasWilayah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kecamatan')
                    ->label('Kecamatan')
                    ->required(),
                TextInput::make('daratan')
                    ->label('Daratan')
                    ->numeric(2)
                    ->required(),
                TextInput::make('perairan')
                    ->label('Perairan')
                    ->numeric(2)
                    ->required(),
                TextInput::make('khusus')
                    ->label('Khusus')
                    ->numeric(2)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')
                    ->label('Kecamatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('daratan')
                    ->label('Daratan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('perairan')
                    ->label('Perairan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('khusus')
                    ->label('Khusus')
                    ->searchable()
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
            'index' => Pages\ListLuasWilayahs::route('/'),
            'create' => Pages\CreateLuasWilayah::route('/create'),
            'edit' => Pages\EditLuasWilayah::route('/{record}/edit'),
        ];
    }
}
