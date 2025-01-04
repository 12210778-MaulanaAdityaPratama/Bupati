<?php

namespace App\Http\Controllers\kecamatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanCamat;
use Spatie\Browsershot\Browsershot;

class LaprocanCamatController extends Controller
{
    public function view($kecamatan, $bulan, $tahun)
    {
        // Ambil data laporan berdasarkan kecamatan
        $data = LaporanCamat::where('kecamatan', $kecamatan)
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->with(['penyelenggaraCamatDetail', 'kegiatanCamatDetail']) // Pastikan relasi dipanggil
            ->get()
            ->groupBy('penyelenggaraCamatDetail.nama_penyelenggara');

        // Pastikan kecamatan valid
        if ($data->isEmpty()) {
            abort(404, "Data untuk kecamatan {$kecamatan}, bulan {$bulan}, dan tahun {$tahun} tidak ditemukan.");
        }
        // Tampilkan data ke view
        return view('kecamatan.laporan-camat.pdf', compact('data', 'kecamatan', 'bulan', 'tahun'));
    }
    public function download($kecamatan, $bulan, $tahun)
    {
        // Ambil data laporan berdasarkan kecamatan, bulan, dan tahun
        $data = LaporanCamat::where('kecamatan', $kecamatan)
            ->where('bulan', $bulan)
            ->where('tahun', $tahun)
            ->with(['penyelenggaraCamatDetail', 'kegiatanCamatDetail']) // Pastikan relasi dipanggil
            ->get()
            ->groupBy('penyelenggaraCamatDetail.nama_penyelenggara');

        // Pastikan kecamatan valid
        if ($data->isEmpty()) {
            abort(404, "Data untuk kecamatan {$kecamatan}, bulan {$bulan}, dan tahun {$tahun} tidak ditemukan.");
        }

        // Render view menjadi HTML string
        $html = view('kecamatan.laporan-camat.pdf', compact('data', 'kecamatan', 'bulan', 'tahun'))->render();

        // Gunakan Browsershot untuk menghasilkan PDF
        $pdfPath = storage_path("app/public/laporan_camat_{$kecamatan}_{$bulan}_{$tahun}.pdf");

        Browsershot::html($html)
            ->format('A4')
            ->margins(20, 10, 20, 10)
            ->waitUntilNetworkIdle() // Tunggu hingga semua aset dimuat
            ->savePdf($pdfPath);

        return response()->download($pdfPath)->deleteFileAfterSend();
    }
}
