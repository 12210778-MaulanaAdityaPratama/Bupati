<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\TanahPemdaDiKecamatanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\TanahPemdaDiKecamatanResource\RelationManagers;
use App\Models\TanahPemdaDiKecamatan;
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

class TanahPemdaDiKecamatanResource extends Resource
{
    protected static ?string $model = TanahPemdaDiKecamatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
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
                TextInput::make('uraian')->label('Uraian'),
                TextInput::make('jumlah')->label('Jumlah')
                    ->placeholder('Kosongkan jika tidak ada')
                    ->numeric(2),
                TextInput::make('sertifikat')->label('Sertifikat')
                    ->placeholder('Kosongkan jika tidak ada')
                    ->numeric(),
                TextInput::make('skt')->label('SKT')
                    ->placeholder('Kosongkan jika tidak ada')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('uraian')->label('Uraian'),
                TextColumn::make('jumlah')->label('Jumlah')
                    ->formatStateUsing(fn($state) => number_format($state, 1) .  ' Ha'),
                TextColumn::make('sertifikat')->label('Sertifikat'),
                TextColumn::make('skt')->label('SKT'),
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
            'index' => Pages\ListTanahPemdaDiKecamatans::route('/'),
            'create' => Pages\CreateTanahPemdaDiKecamatan::route('/create'),
            'edit' => Pages\EditTanahPemdaDiKecamatan::route('/{record}/edit'),
        ];
    }
}
