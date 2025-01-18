<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\PerikananDaratResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\PerikananDaratResource\RelationManagers;
use App\Models\PerikananDarat;
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

class PerikananDaratResource extends Resource
{
    protected static ?string $model = PerikananDarat::class;

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
                TextInput::make('perairan')->label('Luas Perairan (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('tambak')->label('Luas Tambak (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kolam')->label('Luas Kolam (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('mina_padi')->label('Luas Mina Padi (Ha)')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('perairan')->label('Luas Perairan (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),

                TextColumn::make('tambak')->label('Luas Tambak (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('kolam')->label('Luas Kolam (Ha)')
                    ->numeric()
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('mina_padi')->label('Luas Mina Padi (Ha)')
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
            'index' => Pages\ListPerikananDarats::route('/'),
            'create' => Pages\CreatePerikananDarat::route('/create'),
            'edit' => Pages\EditPerikananDarat::route('/{record}/edit'),
        ];
    }
}
