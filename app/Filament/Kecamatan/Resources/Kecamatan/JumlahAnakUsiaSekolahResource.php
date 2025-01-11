<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakUsiaSekolahResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakUsiaSekolahResource\RelationManagers;
use App\Models\JumlahAnakUsiaSekolah;
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

class JumlahAnakUsiaSekolahResource extends Resource
{
    protected static ?string $model = JumlahAnakUsiaSekolah::class;

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
                    'jumlah_anak_sekolah' => 'Jumlah Anak Sekolah',
                    'jumlah_anak_putus_sekolah' => 'Jumlah Anak Putus Sekolah',

                ]),
                TextInput::make('tk')->label('Jumlah TK')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('sd')->label('Jumlah SD')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('sltp')->label('Jumlah SLTP')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('slta')->label('Jumlah SLTA')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
                TextInput::make('perguruan_tinggi')->label('Jumlah Perguruan Tinggi')->placeholder('Kosongkan Jika Tidak Ada')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kategori')->label('Kategori'),
                TextColumn::make('tk')->label('Jumlah TK'),
                TextColumn::make('sd')->label('Jumlah SD'),
                TextColumn::make('sltp')->label('Jumlah SLTP'),
                TextColumn::make('slta')->label('Jumlah SLTA'),
                TextColumn::make('perguruan_tinggi')->label('Jumlah Perguruan Tinggi'),
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
            'index' => Pages\ListJumlahAnakUsiaSekolahs::route('/'),
            'create' => Pages\CreateJumlahAnakUsiaSekolah::route('/create'),
            'edit' => Pages\EditJumlahAnakUsiaSekolah::route('/{record}/edit'),
        ];
    }
}
