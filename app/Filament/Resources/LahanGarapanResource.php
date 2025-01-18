<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LahanGarapanResource\Pages;
use App\Filament\Resources\LahanGarapanResource\RelationManagers;
use App\Models\LahanGarapan;
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

class LahanGarapanResource extends Resource
{
    protected static ?string $model = LahanGarapan::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

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
                TextInput::make('padi')
                    ->label('Padi')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('jagung')
                    ->label('Jagung')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('ubi_kayu')
                    ->label('Ubi Kayu')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('kacang_panjang')
                    ->label('Kacang Panjang')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('kangkung')
                    ->label('Kangkung')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('cabe')
                    ->label('Cabe')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('tomat')
                    ->label('Tomat')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('jeruk_nipis')
                    ->label('Jeruk Nipis')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('mentimun')
                    ->label('Mentimun')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('terong')
                    ->label('Terong')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('talas')
                    ->label('Talas')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('kacang_tahan')
                    ->label('Kacang Tanah')
                    ->placeholder('Contoh: 123.45 / Kosongkan jika tidak ada')
                    ->numeric(2),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')->label('Kecamatan'),
                TextColumn::make('padi')->label('Padi')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('jagung')->label('Jagung')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('ubi_kayu')->label('Ubi Kayu')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('kacang_panjang')->label('Kacang Panjang')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('kangkung')->label('Kangkung')

                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('cabe')->label('Cabe')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('tomat')->label('Tomat')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('jeruk_nipis')->label('Jeruk Nipis')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('mentimun')->label('Mentimun')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('terong')->label('Terong')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('talas')->label('Talas')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->default('-'),
                TextColumn::make('kacang_tahan')->label('Kacang Tanah')
                    ->numeric()
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
                        'admin.lahan-garapan.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.lahan-garapan.download',
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
            'index' => Pages\ListLahanGarapans::route('/'),
            'create' => Pages\CreateLahanGarapan::route('/create'),
            'edit' => Pages\EditLahanGarapan::route('/{record}/edit'),
        ];
    }
}
