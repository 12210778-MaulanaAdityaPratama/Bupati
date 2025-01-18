<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\AirBersihResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\AirBersihResource\RelationManagers;
use App\Models\AirBersih;
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

class AirBersihResource extends Resource
{
    protected static ?string $model = AirBersih::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-circle';
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
                TextInput::make('nama')->label('Nama')
                    ->required(),
                TextInput::make('jumlah')->label('Jumlah Air Bersih')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('jumlah')
                    ->label('Jumlah Air Bersih')
                    ->formatStateUsing(fn($record) => number_format($record->jumlah, 0, ',', '.') . ' Liter'),

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
            'index' => Pages\ListAirBersihs::route('/'),
            'create' => Pages\CreateAirBersih::route('/create'),
            'edit' => Pages\EditAirBersih::route('/{record}/edit'),
        ];
    }
}
