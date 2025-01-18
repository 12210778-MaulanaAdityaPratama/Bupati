<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukUmurResource\Pages;
use App\Filament\Resources\PendudukUmurResource\RelationManagers;
use App\Models\PendudukUmur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class PendudukUmurResource extends Resource
{
    protected static ?string $model = PendudukUmur::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-minus';

    protected static ?string $navigationGroup = 'Profile Kecamatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                select::make('kecamatan')
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
                TextInput::make('thn_0_4thn')
                    ->label('Usia 0-4 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_5_9thn')
                    ->label('Usia 5-9 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_10_14thn')
                    ->label('Usia 10-14 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_15_19thn')
                    ->label('Usia 15-19 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_20_24thn')
                    ->label('Usia 20-24 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_25_29thn')
                    ->label('Usia 25-29 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_30_34thn')
                    ->label('Usia 30-34 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_35_39thn')
                    ->label('Usia 35-39 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_40_59thn')
                    ->label('Usia 40-59 Tahun')
                    ->placeholder('Contoh: 12345')
                    ->numeric(2),
                TextInput::make('thn_60thn')
                    ->label('Usia >60 Tahun')
                    ->placeholder('Contoh: 12345')
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
                TextColumn::make('thn_0_4thn')
                    ->label('Usia 0-4 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_5_9thn')
                    ->label('Usia 5-9 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_10_14thn')
                    ->label('Usia 10-14 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_15_19thn')
                    ->label('Usia 15-19 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_20_24thn')
                    ->label('Usia 20-24 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_25_29thn')
                    ->label('Usia 25-29 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_30_34thn')
                    ->label('Usia 30-34 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_35_39thn')
                    ->label('Usia 35-39 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_40_59thn')
                    ->label('Usia 40-59 Tahun')
                    ->searchable()
                    ->default('-')
                    ->sortable(),
                TextColumn::make('thn_60thn')
                    ->label('Usia >60 Tahun')
                    ->searchable()
                    ->default('-')
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
                        'admin.penduduk-umur.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.penduduk-umur.download',
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
            'index' => Pages\ListPendudukUmurs::route('/'),
            'create' => Pages\CreatePendudukUmur::route('/create'),
            'edit' => Pages\EditPendudukUmur::route('/{record}/edit'),
        ];
    }
}
