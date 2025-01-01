<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\ProfileResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\ProfileResource\RelationManagers;
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

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kelola Profile Desa';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kecamatan', auth()->user()->kecamatan->kecamatan);
    }
    protected static ?string $slug = 'profile';


    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Define the form schema for the Profile resource.
     *
     * This form includes fields for selecting the kecamatan, and inputting details
     * such as the Kode Desa PUM, Nama Desa/Kelurahan, Kabupaten/Kota, Provinsi,
     * Tahun Pembentukan, Dasar Hukum Pembentukan, and Koordinat. It also includes
     * options for selecting the official map status (Peta Resmi) and specifying
     * the geographical boundaries (Utara, Selatan, Timur, Barat).
     *
     * @param Form $form The form instance to define the schema for.
     * @return Form The configured form instance with the defined schema.
     */

    /******  85755521-cbe2-41fd-a898-a01a318961c4  *******/
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kecamatan')
                    ->label('Kecamatan')
                    ->required()
                    ->options(function () {
                        // Ambil kecamatan yang sedang login
                        $kecamatanLogin = auth()->user()->kecamatan->kecamatan;

                        // Mengembalikan kecamatan yang sesuai
                        return [
                            $kecamatanLogin => $kecamatanLogin, // Menampilkan kecamatan pengguna yang login
                        ];
                    }),
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
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
