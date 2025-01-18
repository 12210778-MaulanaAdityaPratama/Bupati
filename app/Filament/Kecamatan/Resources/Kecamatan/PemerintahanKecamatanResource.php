<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\PemerintahanKecamatanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\PemerintahanKecamatanResource\RelationManagers;
use App\Models\PemerintahanKecamatan;
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

class PemerintahanKecamatanResource extends Resource
{
    protected static ?string $model = PemerintahanKecamatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';
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
                Select::make('camat')
                    ->label('Camat')
                    ->required()
                    ->options([
                        'terisi' => 'Terisi',
                        'kosong' => 'Kosong',
                    ]),
                Select::make('sekcam')
                    ->label('Sekcam')
                    ->required()
                    ->options([
                        'terisi' => 'Terisi',
                        'kosong' => 'Kosong',
                    ]),
                Select::make('staff')
                    ->label('Staff Kecamatan')
                    ->required()
                    ->options([
                        'terisi' => 'Terisi',
                        'kosong' => 'Kosong',
                    ]),
                TextInput::make('jumlah')->label('Jumlah')
                    ->numeric()
                    ->placeholder('Kosongkan Jika Tidak Ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('camat')->label('Camat'),
                TextColumn::make('sekcam')->label('Sekcam'),
                TextColumn::make('staff')->label('Staff Kecamatan'),
                TextColumn::make('jumlah')->label('Jumlah'),
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
            'index' => Pages\ListPemerintahanKecamatans::route('/'),
            'create' => Pages\CreatePemerintahanKecamatan::route('/create'),
            'edit' => Pages\EditPemerintahanKecamatan::route('/{record}/edit'),
        ];
    }
}
