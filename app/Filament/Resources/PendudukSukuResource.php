<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendudukSukuResource\Pages;
use App\Filament\Resources\PendudukSukuResource\RelationManagers;
use App\Models\PendudukSuku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class PendudukSukuResource extends Resource
{
    protected static ?string $model = PendudukSuku::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Profile Kecamatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kecamatan')
                    ->label('Kecamatan')
                    ->options([
                        'sungai_raya' => 'Sungai Raya',
                        'sungai_kakap' => 'Sungai Kakap',
                        'sungai_ambawang' => 'Sungai Ambawang',
                        'kuala_mandor_b' => 'Kuala Mandor B',
                        'rasau_jaya' => 'Rasau Jaya',
                        'kubu' => 'Kubu',
                        'teluk_pakedai' => 'Teluk Pakedai',
                        'batu_ampar' => 'Batu Ampar',
                        'terentang' => 'Terentang',
                        'kumpai' => 'Kumpai',

                    ])
                    ->required(),
                TextInput::make('jawa')
                    ->label('Jawa')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('melayu')
                    ->label('Melayu')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('bugis')
                    ->label('Bugis')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('dayak')
                    ->label('Dayak')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('cina')
                    ->label('Cina')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('sunda')
                    ->label('Sunda')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('batak')
                    ->label('Batak')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),
                TextInput::make('madura')
                    ->label('Madura')
                    ->numeric()
                    ->placeholder('Contoh: 1000 / Kosongkan jika tidak ada'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')
                    ->label('Kecamatan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jawa')
                    ->label('Jawa')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('melayu')
                    ->label('Melayu')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('bugis')
                    ->label('Bugis')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('dayak')
                    ->label('Dayak')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('cina')
                    ->label('Cina')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('sunda')
                    ->label('Sunda')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('batak')
                    ->label('Batak')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
                TextColumn::make('madura')
                    ->label('Madura')
                    ->sortable()
                    ->searchable()
                    ->default('-'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route(
                        'admin.penduduk-suku.index',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'admin.penduduk-suku.download',
                        [
                            'kecamatan' => $record->kecamatan,
                        ]
                    ))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListPendudukSukus::route('/'),
            'create' => Pages\CreatePendudukSuku::route('/create'),
            'edit' => Pages\EditPendudukSuku::route('/{record}/edit'),
        ];
    }
}
