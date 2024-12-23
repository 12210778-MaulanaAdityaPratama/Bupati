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
use Filament\Forms\Components\Select;

class LuasWilayahResource extends Resource
{
    protected static ?string $model = LuasWilayah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return 'Profile Kecamatan';
    }


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
                TextInput::make('daratan')
                    ->label('Wilayah Daratan(KM²)')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('perairan')
                    ->label('Wilayah Perairan(KM²)')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
                    ->numeric(2),
                TextInput::make('khusus')
                    ->label('Wilayah Khusus(Hutan Lindung Marga Satwa dll)')
                    ->placeholder('Contoh: 123.45 (Kosongkan jika tidak ada)')
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
                TextColumn::make('daratan')
                    ->label('Daratan')
                    ->formatStateUsing(fn($state) => $state . ' km²')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('perairan')
                    ->label('Perairan')
                    ->formatStateUsing(fn($state) => $state . ' km²')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('khusus')
                    ->label('Khusus')
                    ->formatStateUsing(fn($state) => $state . ' km²')
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
                        'admin.wilayah.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.wilayah.download',
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
            'index' => Pages\ListLuasWilayahs::route('/'),
            'create' => Pages\CreateLuasWilayah::route('/create'),
            'edit' => Pages\EditLuasWilayah::route('/{record}/edit'),
        ];
    }
}
