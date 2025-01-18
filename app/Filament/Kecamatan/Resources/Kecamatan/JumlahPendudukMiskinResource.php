<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPendudukMiskinResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPendudukMiskinResource\RelationManagers;
use App\Models\JumlahPendudukMiskin;
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

class JumlahPendudukMiskinResource extends Resource
{
    protected static ?string $model = JumlahPendudukMiskin::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
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
                TextInput::make('jumlah_penduduk')->label('Jumlah Penduduk (KK)')
                    ->numeric()
                    ->required(),
                TextInput::make('jumlah_penduduk_miskin')->label('Jumlah Penduduk Miskin (KK)')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jumlah_penduduk')->label('Jumlah Penduduk (KK)'),
                TextColumn::make('jumlah_penduduk_miskin')->label('Jumlah Penduduk Miskin (KK)'),
                TextColumn::make('rasio')
                    ->label('Rasio (%)')
                    ->getStateUsing(function ($record) {
                        // Pastikan jumlah penduduk tidak nol untuk menghindari pembagian dengan nol
                        if ($record->jumlah_penduduk > 0) {
                            return round(($record->jumlah_penduduk_miskin / $record->jumlah_penduduk) * 100, 2) . ' %';
                        }
                        return '0 %';
                    })
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
            'index' => Pages\ListJumlahPendudukMiskins::route('/'),
            'create' => Pages\CreateJumlahPendudukMiskin::route('/create'),
            'edit' => Pages\EditJumlahPendudukMiskin::route('/{record}/edit'),
        ];
    }
}
