<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukAgamaResource\Pages;
use App\Filament\Resources\PendudukAgamaResource\RelationManagers;
use App\Models\PendudukAgama;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class PendudukAgamaResource extends Resource
{
    protected static ?string $model = PendudukAgama::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextInput::make('islam')
                    ->label('Islam')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('kristen')
                    ->label('Protestan')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('katolik')
                    ->label('Katolik')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('hindu')
                    ->label('Hindu')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('budha')
                    ->label('Budha')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('konghucu')
                    ->label('Konghucu')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')
                    ->label('Kecamatan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('islam')
                    ->label('Islam')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('kristen')
                    ->label('Protestan')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('katolik')
                    ->label('Katolik')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('hindu')
                    ->label('Hindu')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('budha')
                    ->label('Budha')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('konghucu')
                    ->label('Konghucu')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
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
                        'admin.penduduk-agama.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('Download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.penduduk-agama.download',
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
            'index' => Pages\ListPendudukAgamas::route('/'),
            'create' => Pages\CreatePendudukAgama::route('/create'),
            'edit' => Pages\EditPendudukAgama::route('/{record}/edit'),
        ];
    }
}
