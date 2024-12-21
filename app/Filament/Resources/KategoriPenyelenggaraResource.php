<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use App\Models\KategoriPenyelenggara;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriPenyelenggaraResource\Pages;
use App\Filament\Resources\KategoriPenyelenggaraResource\RelationManagers;

class KategoriPenyelenggaraResource extends Resource
{
    protected static ?string $model = KategoriPenyelenggara::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return 'Kegiatan Camat';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_penyelenggara'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_penyelenggara')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKategoriPenyelenggaras::route('/'),
            'create' => Pages\CreateKategoriPenyelenggara::route('/create'),
            'edit' => Pages\EditKategoriPenyelenggara::route('/{record}/edit'),
        ];
    }
}
