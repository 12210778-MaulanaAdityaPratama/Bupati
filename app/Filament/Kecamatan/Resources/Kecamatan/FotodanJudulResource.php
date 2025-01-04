<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\FotoJudul;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Kecamatan\Resources\Kecamatan\FotodanJudulResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\FotodanJudulResource\RelationManagers;
use Filament\Forms\Components\Select;


class FotodanJudulResource extends Resource
{
    protected static ?string $model = FotoJudul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Kelola Profile Desa';
    protected static ?string $slug = 'foto-dan-judul';

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
                TextInput::make('judul')
                    ->label('Judul')
                    ->required(),
                FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('foto-judul')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('foto')
                    ->label('Gambar')
                    ->getStateUsing(fn($record) => $record->foto_url) // Mengambil URL dari accessor
                    ->height(200)
                    ->square() // Opsional: Tampilkan gambar berbentuk persegi
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),

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
            'index' => Pages\ListFotodanJuduls::route('/'),
            'create' => Pages\CreateFotodanJudul::route('/create'),
            'edit' => Pages\EditFotodanJudul::route('/{record}/edit'),
        ];
    }
}
