<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use App\Models\LaporanHarianCamat;
use App\Models\KegiatanModel;
use App\Models\KategoriPenyelenggara;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MultiSelect;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaporanCamatResource\Pages;
use App\Filament\Resources\LaporanCamatResource\RelationManagers;
use App\Filament\Resources\KegiatanResource\RelationManagers\KegiatanRelationManager;

class LaporanCamatResource extends Resource
{
    protected static ?string $model = LaporanharianCamat::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function getNavigationGroup(): ?string
    {
        return 'Kegiatan Camat';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                select::make('kecamatan')
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
                Select::make('penyelenggara_id')
                    ->label('Penyelenggara Unsur Pelaksana')
                    ->relationship('penyelenggara', 'nama_penyelenggara') // Relasi ke KategoriPenyelenggara
                    ->preload()
                    ->required(),
                Select::make('kegiatan')
                    ->label('Kegiatan')
                    ->relationship('kegiatan', 'nama_kegiatan') // Relasi ke model KegiatanModel
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

                TextInput::make('bobot')
                    ->label('Bobot')
                    ->numeric()
                    ->required(),
                TextInput::make('capai')
                    ->label('Capaian')
                    ->numeric()
                    ->required(),
                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kecamatan')
                    ->label('Nama Kecamatan')
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
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('download')
                    ->label('Download PDF')
                    ->icon('heroicon-o-arrow-down')
                    ->url(fn($record) => route(
                        'laporan-camat.download',
                        [
                            'kecamatan' => $record->kecamatan,
                            'bulan' => $record->bulan,
                            'tahun' => $record->tahun
                        ]
                    ))
                    ->openUrlInNewTab(),
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route(
                        'laporan-camat.view',
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
            KegiatanRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporanCamats::route('/'),
            'create' => Pages\CreateLaporanCamat::route('/create'),
            'edit' => Pages\EditLaporanCamat::route('/{record}/edit'),
            'view' => Pages\ViewLaporanCamat::route('/{record}'),

        ];
    }
}
