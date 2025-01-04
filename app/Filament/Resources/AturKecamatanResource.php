<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AturKecamatanResource\Pages;
use App\Filament\Resources\AturKecamatanResource\RelationManagers;
use App\Models\Profile;
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


class AturKecamatanResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Setting';
    protected static ?string $navigationLabel = 'Atur Kecamatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kecamatan')
                    ->label('Kecamatan')
                    ->required()
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
                    ]),
                TextInput::make('kode')
                    ->label('Kode Desa PUM')
                    ->required(),
                TextInput::make('desa')
                    ->label('Nama Desa/Kelurahan')
                    ->required(),
                TextInput::make('kabupaten')
                    ->label('Kabupaten/Kota')
                    ->required(),
                TextInput::make('provinsi')
                    ->label('Provinsi')
                    ->required(),
                TextInput::make('tahun')
                    ->label('Tahun Pembentukan')
                    ->required(),
                TextInput::make('dasar_hukum')
                    ->label('Dasar Hukum Pembentukan')
                    ->required(),
                TextInput::make('koordinat')
                    ->label('Koordinat')
                    ->required(),
                Select::make('peta_resmi')
                    ->label('Peta Resmi')
                    ->required()
                    ->options([
                        'Ada' => 'Ada',
                        'Tidak Ada' => 'Tidak Ada',
                    ]),
                TextInput::make('utara')
                    ->label('Batas Utara')
                    ->required(),
                TextInput::make('selatan')
                    ->label('Batas Selatan')
                    ->required(),
                TextInput::make('timur')
                    ->label('Batas Timur')
                    ->required(),
                TextInput::make('barat')
                    ->label('Batas Barat')
                    ->required(),

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
                TextColumn::make('desa')
                    ->label('Nama Desa/Kelurahan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kabupaten')
                    ->label('Kabupaten/Kota')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('provinsi')
                    ->label('Provinsi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tahun')
                    ->label('Tahun Pembentukan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('dasar_hukum')
                    ->label('Dasar Hukum Pembentukan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('koordinat')
                    ->label('Koordinat')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('peta_resmi')
                    ->label('Peta Resmi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('utara')
                    ->label('Batas Utara')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('selatan')
                    ->label('Batas Selatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('timur')
                    ->label('Batas Timur')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('barat')
                    ->label('Batas Barat')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAturKecamatans::route('/'),
            'create' => Pages\CreateAturKecamatan::route('/create'),
            'edit' => Pages\EditAturKecamatan::route('/{record}/edit'),
        ];
    }
}
