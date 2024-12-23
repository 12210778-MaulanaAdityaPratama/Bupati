<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaanTanahResource\Pages;
use App\Filament\Resources\PenggunaanTanahResource\RelationManagers;
use App\Models\PenggunaanTanah;
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

class PenggunaanTanahResource extends Resource
{
    protected static ?string $model = PenggunaanTanah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextInput::make('tanah_sawah')
                    ->label('Tanah Sawah(ha)')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('tanah_kering')
                    ->label('Tanah Kering(ha)')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('tanah_basah')
                    ->label('Tanah Basah(ha)')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('tanah_perkebunan')
                    ->label('Tanah Perkebunan(ha)')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('tanah_fasilitas')
                    ->label('Tanah Fasilitas Umum(ha)')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('tanah_hutan')
                    ->label('Tanah Hutan(ha)')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
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
                TextColumn::make('tanah_sawah')
                    ->label('Tanah Sawah(ha)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->numeric(2)
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('tanah_kering')
                    ->label('Tanah Kering(ha)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->numeric(2)
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('tanah_basah')
                    ->label('Tanah Basah(ha)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->numeric(2)
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('tanah_perkebunan')
                    ->label('Tanah Perkebunan(ha)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->numeric(2)
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('tanah_fasilitas')
                    ->label('Tanah Fasilitas Umum(ha)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->numeric(2)
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
                TextColumn::make('tanah_hutan')
                    ->label('Tanah Hutan(ha)')
                    ->searchable()
                    ->sortable()
                    ->default('-')
                    ->numeric(2)
                    ->formatStateUsing(fn($state) => $state . ' Ha'),
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
                        'admin.penggunaan-tanah.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.penggunaan-tanah.download',
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
            'index' => Pages\ListPenggunaanTanahs::route('/'),
            'create' => Pages\CreatePenggunaanTanah::route('/create'),
            'edit' => Pages\EditPenggunaanTanah::route('/{record}/edit'),
        ];
    }
}
