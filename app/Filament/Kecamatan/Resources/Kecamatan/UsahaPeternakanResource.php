<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\UsahaPeternakanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\UsahaPeternakanResource\RelationManagers;
use App\Models\UsahaPeternakan;
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

class UsahaPeternakanResource extends Resource
{
    protected static ?string $model = UsahaPeternakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';
    protected static ?string $navigationGroup = 'Profile Kecamatan';


    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kecamatan', auth()->user()->kecamatan->kecamatan);
    }

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
                Select::make('peternakan_besar')
                    ->label('Peternakan Besar')
                    ->required()
                    ->options([
                        'Ya' => 'ADA',
                        'Tidak' => 'TIDAK ADA',
                    ]),
                Select::make('peternakan_kecil')
                    ->label('Peternakan Kecil')
                    ->required()
                    ->options([
                        'Ya' => 'ADA',
                        'Tidak' => 'TIDAK ADA',
                    ]),
                Select::make('ternak_unggas')
                    ->label('Ternak Unggas')
                    ->required()
                    ->options([
                        'Ya' => 'ADA',
                        'Tidak' => 'TIDAK ADA',
                    ]),
                Select::make('pemotongan_ayam')
                    ->label('Rumah Pemotongan Ayam')
                    ->required()
                    ->options([
                        'Ya' => 'ADA',
                        'Tidak' => 'TIDAK ADA',
                    ]),
                Select::make('pakan_ternak')
                    ->label('Pakan Ternak')
                    ->required()
                    ->options([
                        'Ya' => 'ADA',
                        'Tidak' => 'TIDAK ADA',
                    ]),
                Select::make('usaha_bibit')
                    ->label('Usaha Bibit')
                    ->required()
                    ->options([
                        'Ya' => 'ADA',
                        'Tidak' => 'TIDAK ADA',
                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('peternakan_besar')->label('Peternakan Besar')
                    ->formatStateUsing(fn($state) => $state == 'Ya' ? 'ADA' : 'TIDAK ADA'),
                TextColumn::make('peternakan_kecil')->label('Peternakan Kecil')
                    ->formatStateUsing(fn($state) => $state == 'Ya' ? 'ADA' : 'TIDAK ADA'),
                TextColumn::make('ternak_unggas')->label('Ternak Unggas')
                    ->formatStateUsing(fn($state) => $state == 'Ya' ? 'ADA' : 'TIDAK ADA'),
                TextColumn::make('pemotongan_ayam')->label('Rumah Pemotongan Ayam')
                    ->formatStateUsing(fn($state) => $state == 'Ya' ? 'ADA' : 'TIDAK ADA'),
                TextColumn::make('pakan_ternak')->label('Pakan Ternak')
                    ->formatStateUsing(fn($state) => $state == 'Ya' ? 'ADA' : 'TIDAK ADA'),
                TextColumn::make('usaha_bibit')->label('Usaha Bibit')
                    ->formatStateUsing(fn($state) => $state == 'Ya' ? 'ADA' : 'TIDAK ADA'),
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
            'index' => Pages\ListUsahaPeternakans::route('/'),
            'create' => Pages\CreateUsahaPeternakan::route('/create'),
            'edit' => Pages\EditUsahaPeternakan::route('/{record}/edit'),
        ];
    }
}
