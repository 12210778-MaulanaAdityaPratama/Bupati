<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LaporanCamat;
use App\Models\KegiatanModel;
use Dompdf\FrameDecorator\Text;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource\Pages;
use App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource\RelationManagers;

class LaporanCamatKecamatanResource extends Resource
{
    protected static ?string $model = LaporanCamat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kecamatan', auth()->user()->kecamatan->kecamatan);
    }
    protected static ?string $slug = 'laporan-camat-kecamatan';
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
                Select::make('penyelenggara_id')
                    ->label('Penyelenggara Unsur Pelaksana')
                    ->relationship('penyelenggaraCamatDetail', 'nama_penyelenggara') // Relasi ke KategoriPenyelenggara
                    ->preload()
                    ->required(),
                Select::make('kegiatan_id')
                    ->label('Kegiatan')
                    ->relationship('kegiatanCamatDetail', 'nama_kegiatan') // Relasi ke KegiatanModel
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('nama_kegiatan')
                            ->label('Nama Kegiatan')
                            ->required(),
                    ])
                    ->createOptionUsing(function (array $data) {
                        return KegiatanModel::create($data)->id;
                    }),
                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required()
                    ->native(false),
                TimePicker::make('waktu')
                    ->required()
                    ->label('Waktu')
                    ->seconds(false)
                    ->format('H:i')  // Format 24 jam
                    ->native(false),
                select::make('bulan')
                    ->label('Bulan')
                    ->required()
                    ->options([
                        1 => 'Januari',
                        2 => 'Februari',
                        3 => 'Maret',
                        4 => 'April',
                        5 => 'Mei',
                        6 => 'Juni',
                        7 => 'Juli',
                        8 => 'Agustus',
                        9 => 'September',
                        10 => 'Oktober',
                        11 => 'November',
                        12 => 'Desember',

                    ]),
                TextInput::make('tahun')
                    ->label('Tahun')
                    ->required(),
                TextInput::make('tempat_pelaksanaan')
                    ->label('Tempat Pelaksanaan')
                    ->required(),
                TextInput::make('keterangan')
                    ->label('Keterangan')
                    ->placeholder('Kosongkan jika tidak ada'),
                TextInput::make('kendala')
                    ->label('Kendala')
                    ->placeholder('Kosongkan jika tidak ada'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kegiatanCamatDetail.nama_kegiatan')
                    ->label('Kegiatan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('bulan')
                    ->label('Periode')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn($record) => [
                        1 => 'Januari',
                        2 => 'Februari',
                        3 => 'Maret',
                        4 => 'April',
                        5 => 'Mei',
                        6 => 'Juni',
                        7 => 'Juli',
                        8 => 'Agustus',
                        9 => 'September',
                        10 => 'Oktober',
                        11 => 'November',
                        12 => 'Desember',
                    ][$record->bulan] . ' ' . $record->tahun),
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->searchable()  // Menambahkan fitur searchable di tahun
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route(
                        'laporan-camat-kecamatan.view',
                        [
                            'kecamatan' => $record->kecamatan,
                            'bulan' => $record->bulan,
                            'tahun' => $record->tahun
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'laporan-camat-kecamatan.download',
                        [
                            'kecamatan' => $record->kecamatan,
                            'bulan' => $record->bulan,
                            'tahun' => $record->tahun
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
            'index' => Pages\ListLaporanCamatKecamatans::route('/'),
            'create' => Pages\CreateLaporanCamatKecamatan::route('/create'),
            'edit' => Pages\EditLaporanCamatKecamatan::route('/{record}/edit'),
        ];
    }
}
