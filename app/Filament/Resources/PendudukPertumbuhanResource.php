<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukPertumbuhanResource\Pages;
use App\Filament\Resources\PendudukPertumbuhanResource\RelationManagers;
use App\Models\PendudukPertumbuhan;
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

class PendudukPertumbuhanResource extends Resource
{
    protected static ?string $model = PendudukPertumbuhan::class;

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
                TextInput::make('jumlah_penduduk_thn_ini')
                    ->label('Jumlah Penduduk Tahun Ini')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('jumlah_penduduk_thn_lalu')
                    ->label('Jumlah Penduduk Tahun Lalu')
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('pertumbuhan')
                    ->label('Jumlah Pertumbuhan(%)')
                    ->placeholder('Contoh: 100 / 45.5% / Kosongkan jika tidak ada')
                    ->numeric()
                    ->rules('between:0,100')
                    ->extraInputAttributes(['min' => 0, 'max' => 100]),
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
                TextColumn::make('jumlah_penduduk_thn_ini')
                    ->label('Jumlah Penduduk Tahun Ini')
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('jumlah_penduduk_thn_lalu')
                    ->label('Jumlah Penduduk Tahun Lalu')
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('pertumbuhan')
                    ->label('Jumlah Pertumbuhan(%)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->formatStateUsing(fn($state) => $state . ' %'),
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
                        'admin.penduduk-pertumbuhan.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.penduduk-pertumbuhan.download',
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
            'index' => Pages\ListPendudukPertumbuhans::route('/'),
            'create' => Pages\CreatePendudukPertumbuhan::route('/create'),
            'edit' => Pages\EditPendudukPertumbuhan::route('/{record}/edit'),
        ];
    }
}
