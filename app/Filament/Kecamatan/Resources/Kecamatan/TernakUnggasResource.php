<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakUnggasResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\TernakUnggasResource\RelationManagers;
use App\Models\TernakUnggas;
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

class TernakUnggasResource extends Resource
{
    protected static ?string $model = TernakUnggas::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kecamatan', auth()->user()->kecamatan->kecamatan);
    }
    protected static ?string $navigationGroup = 'Profile Kecamatan';


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
                TextInput::make('ayam_kampung')->label('Jumlah Ayam Kampung')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('ayam_ras')->label('Jumlah Ayam Ras')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('bebek')->label('Jumlah Bebek')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('angsa')->label('Jumlah Angsa')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kelinci')->label('Jumlah Kelinci')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ayam_kampung')->label('Jumlah Ayam Kampung'),
                TextColumn::make('ayam_ras')->label('Jumlah Ayam Ras'),
                TextColumn::make('bebek')->label('Jumlah Bebek'),
                TextColumn::make('angsa')->label('Jumlah Angsa'),
                TextColumn::make('kelinci')->label('Jumlah Kelinci'),

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
            'index' => Pages\ListTernakUnggas::route('/'),
            'create' => Pages\CreateTernakUnggas::route('/create'),
            'edit' => Pages\EditTernakUnggas::route('/{record}/edit'),
        ];
    }
}
