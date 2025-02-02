<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\LaporanHarianCamat;
use Carbon\Carbon;

class AdminChart extends ChartWidget
{
    protected static ?string $heading = 'Laporan Harian Camat Sekarang';

    protected function getData(): array
    {
        // Mulai dengan bulan dan tahun sekarang
        $bulan = Carbon::now()->month;
        $tahun = Carbon::now()->year;

        // Cek data dan mundur jika kosong
        $laporan = null;
        $maxCekBulan = 12; // Maksimum mundur 12 bulan
        $count = 0;

        // Cek data bulan dan tahun sekarang, jika kosong, mundur
        while ($laporan === null || $laporan->isEmpty()) {
            // Ambil data laporan untuk bulan dan tahun yang saat ini
            $laporan = LaporanHarianCamat::with('penyelenggara')
                ->where('bulan', $bulan)
                ->where('tahun', $tahun)
                ->get();

            // Jika sudah mencoba 12 bulan dan tetap kosong, keluar dari loop
            if ($count >= $maxCekBulan) {
                break;
            }

            // Mundur satu bulan
            $bulan = Carbon::createFromDate($tahun, $bulan, 1)->subMonth()->month;
            $tahun = Carbon::createFromDate($tahun, $bulan, 1)->year;
            $count++;
        }

        // Jika data masih kosong setelah 12 bulan mundur
        if ($laporan->isEmpty()) {
            return [
                'datasets' => [
                    [
                        'label' => 'Jumlah Data',
                        'data' => [],
                    ],
                ],
                'labels' => [],
            ];
        }

        // Proses data untuk chart
        $labels = [];
        $values = [];

        // Hitung total jumlah untuk menghitung persentase
        $totalJumlah = $laporan->sum('jumlah');

        // Kelompokkan data berdasarkan kecamatan dan penyelenggara
        foreach ($laporan as $item) {
            // Membuat label dengan format 'Kecamatan - Nama Penyelenggara'
            $labels[] = ucwords(str_replace("_", " ", $item->kecamatan)) . ' - ' . ($item->penyelenggara->nama_penyelenggara ?? 'Tidak Diketahui');

            $values[] = $item->jumlah;
        }

        // Membuat persentase untuk setiap item
        $percentages = array_map(function ($value) use ($totalJumlah) {
            return $totalJumlah > 0 ? round(($value / $totalJumlah) * 100) : 0;
        }, $values);

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Data',
                    'data' => $percentages, // Menggunakan persentase
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie'; // Anda dapat mengganti tipe chart sesuai kebutuhan, misalnya 'bar', 'line', dll.
    }
}
