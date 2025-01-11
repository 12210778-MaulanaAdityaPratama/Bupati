<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakSekolahResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakSekolahResource\RelationManagers;
use App\Models\JumlahAnakSekolah;
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


class JumlahAnakSekolahResource extends Resource
{
    protected static ?string $model = JumlahAnakSekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
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
                Select::make('kategori')->label('Kategori')->required()->options([
                    'sekolah_negeri' => 'Sekolah Negeri',
                    'sekolah_swasta' => 'Sekolah Swasta',

                ]),
                TextInput::make('sd')->label('SD')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric(),
                TextInput::make('mi')->label('MI')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric(),
                TextInput::make('sltp')->label('SLTP')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric(),
                TextInput::make('mts')->label('MTS')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric(),
                TextInput::make('slta')->label('SLTA')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric(),
                TextInput::make('aliyah')->label('ALIYAH')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori')->label('Kategori'),
                TextColumn::make('sd')->label(' SD'),
                TextColumn::make('mi')->label(' MI'),
                TextColumn::make('sltp')->label(' SLTP'),
                TextColumn::make('mts')->label(' MTS'),
                TextColumn::make('slta')->label(' SLTA'),
                TextColumn::make('aliyah')->label(' ALIYAH'),
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
            'index' => Pages\ListJumlahAnakSekolahs::route('/'),
            'create' => Pages\CreateJumlahAnakSekolah::route('/create'),
            'edit' => Pages\EditJumlahAnakSekolah::route('/{record}/edit'),
        ];
    }
}
