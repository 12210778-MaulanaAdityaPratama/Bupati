<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\TingkatPendidikanAparatKecamatanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\TingkatPendidikanAparatKecamatanResource\RelationManagers;
use App\Models\TingkatPendidikanAparatKecamatan;
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

class TingkatPendidikanAparatKecamatanResource extends Resource
{
    protected static ?string $model = TingkatPendidikanAparatKecamatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
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
                TextInput::make('nama')->label('Nama'),
                Select::make('tingkat_pendidikan')->label('Tingkat Pendidikan')->options([
                    'SD' => 'SD',
                    'SLTP' => 'SLTP',
                    'SLTA' => 'SLTA',
                    'D3' => 'D3',
                    'S1' => 'S1',
                    'S2' => 'S2',
                    'S3' => 'S3',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('tingkat_pendidikan')->label('Tingkat Pendidikan'),
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
            'index' => Pages\ListTingkatPendidikanAparatKecamatans::route('/'),
            'create' => Pages\CreateTingkatPendidikanAparatKecamatan::route('/create'),
            'edit' => Pages\EditTingkatPendidikanAparatKecamatan::route('/{record}/edit'),
        ];
    }
}
