<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukPendidikanResource\Pages;
use App\Filament\Resources\PendudukPendidikanResource\RelationManagers;
use App\Models\PendudukPendidikan;
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

class PendudukPendidikanResource extends Resource
{
    protected static ?string $model = PendudukPendidikan::class;

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
                TextInput::make('tidak_sekolah')
                    ->label('Tidak Tamat SD')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('sd')
                    ->label('Tamat SD')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('smp')
                    ->label('Tamat SLTP')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('sma')
                    ->label('Tamatan SLTA')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('akademi')
                    ->label('Tamat Akademi/Sekolah Tinggi')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('uni')
                    ->label('Tamat Universitas')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')
                    ->sortable()
                    ->searchable()
                    ->label('Kecamatan'),
                TextColumn::make('tidak_sekolah')
                    ->label('Tidak Tamat SD')
                    ->searchable()
                    ->sortable()
                    ->default('-'),

                TextColumn::make('sd')
                    ->label('Tamat SD')
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('smp')
                    ->label('Tamat SLTP')
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('sma')
                    ->label('Tamatan SLTA')
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('akademi')
                    ->label('Tamat Akademi/Sekolah Tinggi')
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('universitas')
                    ->label('Tamat Universitas')
                    ->searchable()
                    ->sortable()
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
                        'admin.penduduk-pendidikan.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.penduduk-pendidikan.download',
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
            'index' => Pages\ListPendudukPendidikans::route('/'),
            'create' => Pages\CreatePendudukPendidikan::route('/create'),
            'edit' => Pages\EditPendudukPendidikan::route('/{record}/edit'),
        ];
    }
}
