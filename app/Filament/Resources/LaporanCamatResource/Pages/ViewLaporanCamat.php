<?php

namespace App\Filament\Resources\LaporanCamatResource\Pages;

use App\Filament\Resources\LaporanCamatResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\TextColumn;

class ViewLaporanCamat extends ViewRecord
{
    protected static string $resource = LaporanCamatResource::class;

    protected function getHeaderWidgets(): array
    {
        return [];
    }

    protected function getFooterWidgets(): array
    {
        return [];
    }

    protected function getViewContent(): string
    {
        $record = $this->record;

        // Tabel kegiatan dengan data relasi
        $html = "
        <div style='font-family: Arial, sans-serif;'>
            <h3 style='text-align: center;'>Laporan Kegiatan Harian Camat</h3>
            <p><strong>Provinsi:</strong> Kalimantan Barat</p>
            <p><strong>Kabupaten:</strong> Kubu Raya</p>
            <p><strong>Kecamatan:</strong> {$record->kecamatan}</p>
            <p><strong>Bulan:</strong> " . $this->getBulanLabel($record->bulan) . "</p>

            <table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid #000; padding: 8px;'>No</th>
                        <th style='border: 1px solid #000; padding: 8px;'>Kegiatan</th>
                        <th style='border: 1px solid #000; padding: 8px;'>Bobot</th>
                        <th style='border: 1px solid #000; padding: 8px;'>Capaian Maksimal</th>
                        <th style='border: 1px solid #000; padding: 8px;'>Jumlah</th>
                    </tr>
                </thead>
                <tbody>";

        $no = 1;
        foreach ($record->kegiatan as $kegiatan) {
            $html .= "
                    <tr>
                        <td style='border: 1px solid #000; padding: 8px; text-align: center;'>{$no}</td>
                        <td style='border: 1px solid #000; padding: 8px;'>{$kegiatan->nama_kegiatan}</td>
                        <td style='border: 1px solid #000; padding: 8px; text-align: center;'>{$kegiatan->bobot}</td>
                        <td style='border: 1px solid #000; padding: 8px; text-align: center;'>{$kegiatan->capaian_maksimal}</td>
                        <td style='border: 1px solid #000; padding: 8px; text-align: center;'>{$kegiatan->jumlah}</td>
                    </tr>";
            $no++;
        }

        $html .= "
                </tbody>
            </table>
        </div>";

        return $html;
    }

    private function getBulanLabel($bulan): string
    {
        $bulanLabels = [
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
        ];

        return $bulanLabels[$bulan] ?? '-';
    }
}
