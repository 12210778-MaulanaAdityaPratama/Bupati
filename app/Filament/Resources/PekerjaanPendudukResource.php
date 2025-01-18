<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PekerjaanPendudukResource\Pages;
use App\Filament\Resources\PekerjaanPendudukResource\RelationManagers;
use App\Models\PekerjaanPenduduk;
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

class PekerjaanPendudukResource extends Resource
{
    protected static ?string $model = PekerjaanPenduduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

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
                TextInput::make('pns')
                    ->label('PNS')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('tni')
                    ->label('TNI')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('polri')
                    ->label('POLRI')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('petani')
                    ->label('Petani')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('nelayan')
                    ->label('Nelayan')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('pedagang')
                    ->label('Pedagang')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('buruh')
                    ->label('Buruh')
                    ->placeholder('Contoh: 1000')
                    ->numeric(),
                TextInput::make('lain')
                    ->label('Lain-Lain')
                    ->placeholder('Contoh: 1000')
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
                TextColumn::make('pns')
                    ->sortable()
                    ->searchable()
                    ->label('PNS')
                    ->default('-'),
                TextColumn::make('tni')
                    ->sortable()
                    ->searchable()
                    ->label('TNI')
                    ->default('-'),
                TextColumn::make('polri')
                    ->sortable()
                    ->searchable()
                    ->label('POLRI')
                    ->default('-'),
                TextColumn::make('petani')
                    ->sortable()
                    ->searchable()
                    ->label('Petani')
                    ->default('-'),
                TextColumn::make('nelayan')
                    ->sortable()
                    ->searchable()
                    ->label('Nelayan')
                    ->default('-'),
                TextColumn::make('pedagang')
                    ->sortable()
                    ->searchable()
                    ->label('Pedagang')
                    ->default('-'),
                TextColumn::make('buruh')
                    ->sortable()
                    ->searchable()
                    ->label('Buruh')
                    ->default('-'),
                TextColumn::make('lain')
                    ->sortable()
                    ->searchable()
                    ->label('Lain-Lain')
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
                        'admin.pekerjaan-penduduk.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.pekerjaan-penduduk.download',
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
            'index' => Pages\ListPekerjaanPenduduks::route('/'),
            'create' => Pages\CreatePekerjaanPenduduk::route('/create'),
            'edit' => Pages\EditPekerjaanPenduduk::route('/{record}/edit'),
        ];
    }
}
