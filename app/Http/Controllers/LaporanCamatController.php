<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LaporanHarianCamat;
use Spatie\Browsershot\Browsershot;


class LaporanCamatController extends Controller
{
    public function download($kecamatan, $bulan, $tahun)
    {
        // Ambil data laporan berdasarkan kecamatan, bulan, dan tahun
        $data = LaporanHarianCamat::where('kecamatan', $kecamatan)
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->with(['penyelenggara', 'kegiatan'])
            ->get()
            ->groupBy('penyelenggara.nama_penyelenggara');

        // Pastikan kecamatan valid
        if ($data->isEmpty()) {
            abort(404, "Data untuk kecamatan {$kecamatan}, bulan {$bulan}, dan tahun {$tahun} tidak ditemukan.");
        }

        // Ambil gambar pie chart dari session
        $pieChartImage = session('pieChartImage');

        // Render view menjadi HTML string
        $html = view('pdf.laporan-camat', compact('data', 'kecamatan', 'bulan', 'tahun', 'pieChartImage'))->render();

        // Gunakan Browsershot untuk menghasilkan PDF
        $pdfPath = storage_path("app/public/laporan_camat_{$kecamatan}_{$bulan}_{$tahun}.pdf");

        Browsershot::html($html)
            ->format('A4')
            ->margins(20, 10, 20, 10)
            ->waitUntilNetworkIdle() // Tunggu hingga semua aset dimuat
            ->savePdf($pdfPath);

        return response()->download($pdfPath)->deleteFileAfterSend();
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
        return view('pdf.download', compact('data', 'kecamatan', 'bulan', 'tahun'));
    }
}
