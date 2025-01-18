<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakKecilResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\TernakKecilResource\RelationManagers;
use App\Models\Kecamatan\TernakKecil;
use App\Models\TernakKecil as ModelsTernakKecil;
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

class TernakKecilResource extends Resource
{
    protected static ?string $model = ModelsTernakKecil::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

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
                TextInput::make('kambing')->label('Jumlah Kambing')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('babi')->label('Jumlah Babi')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('domba')->label('Jumlah Domba')
                    ->numeric()
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kambing')->label('Jumlah Kambing'),
                TextColumn::make('babi')->label('Jumlah Babi'),
                TextColumn::make('domba')->label('Jumlah Domba'),
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
            'index' => Pages\ListTernakKecils::route('/'),
            'create' => Pages\CreateTernakKecil::route('/create'),
            'edit' => Pages\EditTernakKecil::route('/{record}/edit'),
        ];
    }
}
