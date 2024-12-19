<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LaporanHarianCamat;

class LaporanCamatController extends Controller
{
    public function download()
    {
        $data = LaporanHarianCamat::all(); // Fetch semua data laporan

        $pdf = Pdf::loadView('pdf.laporan-camat', ['data' => $data]);

        return $pdf->download('laporan_camat.pdf');
    }

    public function view($id, $kecamatan)
    {
        // Ambil data laporan berdasarkan kecamatan
        $data = LaporanHarianCamat::where('id', $id)
            ->where('kecamatan', $kecamatan)
            ->with(['penyelenggara', 'kegiatan']) // Pastikan relasi dipanggil
            ->get();

        // Tampilkan data ke view
        return view('pdf.laporan-camat', compact('data'));
    }
}
