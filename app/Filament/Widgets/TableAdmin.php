<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use App\Models\LaporanHarianCamat;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;

class TableAdmin extends BaseWidget
{
    protected static ?string $heading = 'Riwayat Laporan Camat'; // Judul tabel
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(LaporanHarianCamat::query()) // Berikan query model yang sesuai
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
            ]);
    }
}
