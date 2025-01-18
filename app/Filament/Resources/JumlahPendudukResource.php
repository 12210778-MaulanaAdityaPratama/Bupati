<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JumlahPendudukResource\Pages;
use App\Filament\Resources\JumlahPendudukResource\RelationManagers;
use App\Models\JumlahPenduduk;
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

class JumlahPendudukResource extends Resource
{
    protected static ?string $model = JumlahPenduduk::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
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
                TextInput::make('kk')
                    ->label('Jumlah KK')
                    ->placeholder('Contoh: 12345')
                    ->numeric(),
                TextInput::make('laki_laki')
                    ->label('Jumlah Laki-laki')
                    ->placeholder('Contoh: 12345')
                    ->numeric(),
                TextInput::make('perempuan')
                    ->label('Jumlah Perempuan')
                    ->placeholder('Contoh: 12345')
                    ->numeric(),
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
                TextColumn::make('kk')
                    ->label('Jumlah KK')
                    ->formatStateUsing(fn($state) => number_format($state))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('laki_laki')
                    ->label('Jumlah Laki-laki')
                    ->formatStateUsing(fn($state) => number_format($state))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('perempuan')
                    ->label('Jumlah Perempuan')
                    ->formatStateUsing(fn($state) => number_format($state))
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
                        'admin.jumlah-penduduk.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.jumlah-penduduk.download',
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
            'index' => Pages\ListJumlahPenduduks::route('/'),
            'create' => Pages\CreateJumlahPenduduk::route('/create'),
            'edit' => Pages\EditJumlahPenduduk::route('/{record}/edit'),
        ];
    }
}
