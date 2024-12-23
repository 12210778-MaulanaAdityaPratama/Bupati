<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PekerjaanPenduduk;
use Spatie\Browsershot\Browsershot;

class PekerjaanPendudukController extends Controller
{
    public function index(Request $request)
    {
        $data = PekerjaanPenduduk::all();
        return view('admin.pekerjaan-penduduk.pdf', compact('data'));
    }

    public function download(Request $request)
    {
        $data = PekerjaanPenduduk::all();

        // Render HTML dari Blade
        $html = view('admin.pekerjaan-penduduk.pdf', compact('data'))->render();

        // Buat PDF dengan Browsershot
        $pdf = Browsershot::html($html)
            ->setOption('landscape', false) // Opsional: gunakan mode landscape jika diperlukan
            ->showBackground() // Tampilkan background CSS
            ->margins(10, 10, 10, 10) // Set margin PDF (opsional)
            ->pdf();

        // Kirim file PDF sebagai download response
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="data-pekerjaan-penduduk.pdf"');
    }
}
