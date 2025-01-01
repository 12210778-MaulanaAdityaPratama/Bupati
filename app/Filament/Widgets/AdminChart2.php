<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\LaporanHarianCamat;
use Carbon\Carbon;

class AdminChart2 extends ChartWidget
{
    protected static ?string $heading = 'Laporan Harian Camat Terlama';

    protected function getData(): array
    {
        // Tentukan bulan dan tahun sebelumnya
        $bulan = Carbon::now()->subMonth(12)->month; // Mengambil bulan sebelumnya
        $tahun = Carbon::now()->subMonth(12)->year;  // Mengambil tahun sebelumnya

        // Ambil semua laporan yang memiliki kecamatan yang sama dan bulan serta tahun yang sama
        $laporan = LaporanHarianCamat::with('penyelenggara')
            ->where('bulan', $bulan) // Filter berdasarkan bulan sebelumnya
            ->where('tahun', $tahun) // Filter berdasarkan tahun sebelumnya
            ->get();

        // Cek jika data kosong
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
            $labels[] = $item->kecamatan . ' - ' . ($item->penyelenggara->nama_penyelenggara ?? 'Tidak Diketahui');
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
