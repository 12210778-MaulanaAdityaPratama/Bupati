<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LaporanHarianCamat;

class LaporanCamatController extends Controller
{
    public function download($kecamatan, $bulan, $tahun)
    {
        // Ambil data laporan berdasarkan kecamatan, bulan, dan tahun
        $data = LaporanHarianCamat::where('kecamatan', $kecamatan)
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->with(['penyelenggara', 'kegiatan']) // Pastikan relasi dipanggil
            ->get()
            ->groupBy('penyelenggara.nama_penyelenggara');

        // Pastikan kecamatan valid
        if ($data->isEmpty()) {
            abort(404, "Data untuk kecamatan {$kecamatan}, bulan {$bulan}, dan tahun {$tahun} tidak ditemukan.");
        }

        // Load view untuk PDF dan kirimkan data
        $pdf = Pdf::loadView('pdf.laporan-camat', compact('data', 'kecamatan', 'bulan', 'tahun'));

        return $pdf->download("laporan_camat_{$kecamatan}_{$bulan}_{$tahun}.pdf");
    }
    public function view($kecamatan, $bulan, $tahun)
    {
        // Ambil data laporan berdasarkan kecamatan
        $data = LaporanHarianCamat::where('kecamatan', $kecamatan)
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->with(['penyelenggara', 'kegiatan']) // Pastikan relasi dipanggil
            ->get()
            ->groupBy('penyelenggara.nama_penyelenggara');

        // Pastikan kecamatan valid
        if ($data->isEmpty()) {
            abort(404, "Data untuk kecamatan {$kecamatan}, bulan {$bulan}, dan tahun {$tahun} tidak ditemukan.");
        }
        // Tampilkan data ke view
        return view('pdf.laporan-camat', compact('data', 'kecamatan', 'bulan', 'tahun'));
    }
}
