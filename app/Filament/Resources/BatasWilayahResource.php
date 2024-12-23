<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BatasWilayah;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BatasWilayahResource\Pages;
use App\Filament\Resources\BatasWilayahResource\RelationManagers;

class BatasWilayahResource extends Resource
{
    protected static ?string $model = BatasWilayah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Profile Kecamatan';
    }

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
                TextInput::make('utara')
                    ->label('Batas Utara')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('timur')
                    ->label('Batas Timur')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('selatan')
                    ->label('Batas Selatan')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('barat')
                    ->label('Batas Barat')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('batas')
                    ->label('Batas')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('keterangan')
                    ->label('Keterangan')
                    ->placeholder('Keterangan'),


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
                TextColumn::make('utara')
                    ->label('Batas Utara')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state . ' km²'),
                TextColumn::make('timur')
                    ->label('Batas Timur')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state . ' km²'),
                TextColumn::make('selatan')
                    ->label('Batas Selatan')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state . ' km²'),
                TextColumn::make('barat')
                    ->label('Batas Barat')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state . ' km²'),
                TextColumn::make('batas')
                    ->label('Batas')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn($state) => $state . ' km²'),
                TextColumn::make('keterangan')
                    ->label('Keterangan')
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
                        'admin.batas-wilayah.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Unduh')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.batas-wilayah.download',
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
            'index' => Pages\ListBatasWilayahs::route('/'),
            'create' => Pages\CreateBatasWilayah::route('/create'),
            'edit' => Pages\EditBatasWilayah::route('/{record}/edit'),
        ];
    }
}
