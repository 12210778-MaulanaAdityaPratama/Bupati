<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LuasKepadatanResource\Pages;
use App\Filament\Resources\LuasKepadatanResource\RelationManagers;
use App\Models\LuasKepadatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class LuasKepadatanResource extends Resource
{
    protected static ?string $model = LuasKepadatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    protected static ?string $navigationGroup = 'Profile Kecamatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kecamatan')
                    ->label('Kecamatan')
                    ->options([
                        'sungai_raya' => 'Sungai Raya',
                        'sungai_kakap' => 'Sungai Kakap',
                        'sungai_ambawang' => 'Sungai Ambawang',
                        'kuala_mandor_b' => 'Kuala Mandor B',
                        'rasau_jaya' => 'Rasau Jaya',
                        'kubu' => 'Kubu',
                        'teluk_pakedai' => 'Teluk Pakedai',
                        'batu_ampar' => 'Batu Ampar',
                        'terentang' => 'Terentang',
                        'kumpai' => 'Kumpai',
                    ])
                    ->required(),
                TextInput::make('jumlah')
                    ->label('Jumlah Penduduk')
                    ->placeholder('Contoh: 12345')
                    ->numeric(),
                TextInput::make('luas')
                    ->label('Luas Wilayah km²')
                    ->placeholder('Contoh: 123.45')
                    ->numeric(2),
                TextInput::make('kepadatan')
                    ->label('Kepadatan Wilayah km²')
                    ->placeholder('Contoh: 123.45')
                    ->numeric(2),
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
                TextColumn::make('jumlah')
                    ->label('Jumlah Penduduk')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('luas')
                    ->label('Luas Wilayah km²')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kepadatan')
                    ->label('Kepadatan Wilayah km²')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route(
                        'admin.luas-kepadatan.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.luas-kepadatan.download',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListLuasKepadatans::route('/'),
            'create' => Pages\CreateLuasKepadatan::route('/create'),
            'edit' => Pages\EditLuasKepadatan::route('/{record}/edit'),
        ];
    }
}
