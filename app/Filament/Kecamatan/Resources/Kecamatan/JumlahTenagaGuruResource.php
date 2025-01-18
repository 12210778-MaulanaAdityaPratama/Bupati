<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruResource\RelationManagers;
use App\Models\JumlahTenagaGuru;
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

class JumlahTenagaGuruResource extends Resource
{
    protected static ?string $model = JumlahTenagaGuru::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
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
                TextInput::make('sd')->label('Jumlah SD')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('sltp')->label('Jumlah SLTP')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('slta')->label('Jumlah SLTA')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('negeri')->label('Jumlah Negeri')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('swasta')->label('Jumlah Swasta')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sd')->label('Jumlah SD'),
                TextColumn::make('sltp')->label('Jumlah SLTP'),
                TextColumn::make('slta')->label('Jumlah SLTA'),
                TextColumn::make('negeri')->label('Jumlah Negeri'),
                TextColumn::make('swasta')->label('Jumlah Swasta'),
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
            'index' => Pages\ListJumlahTenagaGurus::route('/'),
            'create' => Pages\CreateJumlahTenagaGuru::route('/create'),
            'edit' => Pages\EditJumlahTenagaGuru::route('/{record}/edit'),
        ];
    }
}
