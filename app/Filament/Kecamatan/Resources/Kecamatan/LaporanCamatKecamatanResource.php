<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource\RelationManagers;
use App\Models\LaporanCamat;
use Dompdf\FrameDecorator\Text;
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
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class LaporanCamatKecamatanResource extends Resource
{
    protected static ?string $model = LaporanCamat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kecamatan', auth()->user()->kecamatan->kecamatan);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('kecamatan')
                    ->label('Kecamatan')
                    ->required(),
                Select::make('penyelenggara_id')
                    ->label('Penyelenggara Unsur Pelaksana')
                    ->relationship('penyelenggaraCamatDetail', 'nama_penyelenggara') // Relasi ke KategoriPenyelenggara
                    ->preload()
                    ->required(),
                Select::make('kegiatan_id')
                    ->label('Kegiatan')
                    ->relationship('kegiatanCamatDetail', 'nama_kegiatan') // Relasi ke KegiatanModel
                    ->preload()
                    ->required(),
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required()
                    ->native(false),
                TextInput::make('hari')
                    ->label('Hari')
                    ->required(),
                TimePicker::make('waktu')
                    ->required()
                    ->label('Waktu')
                    ->seconds(false)
                    ->format('H:i')  // Format 24 jam
                    ->native(false),
                TextInput::make('bulan')
                    ->label('Bulan')
                    ->required(),
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->required(),
                TextInput::make('tempat_pelaksanaan')
                    ->label('Tempat Pelaksanaan')
                    ->required(),
                TextInput::make('keterangan')
                    ->label('Keterangan'),
                TextInput::make('kendala')
                    ->label('Kendala'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')
                    ->label('Kecamatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('penyelenggaraCamatDetail.nama_penyelenggara')
                    ->label('Penyelenggara Unsur Pelaksana')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kegiatanCamatDetail.nama_kegiatan')
                    ->label('Kegiatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('waktu')
                    ->label('Waktu')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('bulan')
                    ->label('Bulan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tempat_pelaksanaan')
                    ->label('Tempat Pelaksanaan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kendala')
                    ->label('Kendala')
                    ->searchable()
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
            'index' => Pages\ListLaporanCamatKecamatans::route('/'),
            'create' => Pages\CreateLaporanCamatKecamatan::route('/create'),
            'edit' => Pages\EditLaporanCamatKecamatan::route('/{record}/edit'),
        ];
    }
}
