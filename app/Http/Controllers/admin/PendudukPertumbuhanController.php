<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PendudukPertumbuhan;
use Spatie\Browsershot\Browsershot;

class PendudukPertumbuhanController extends Controller
{
    public function index(Request $request)
    {
        $data = PendudukPertumbuhan::all();
        return view('admin.penduduk-pertumbuhan.pdf', compact('data'));
    }

    public function download(Request $request)
    {
        $data = PendudukPertumbuhan::all();

        // Render HTML dari Blade
        $html = view('admin.penduduk-pertumbuhan.pdf', compact('data'))->render();

        // Buat PDF dengan Browsershot
        $pdf = Browsershot::html($html)
            ->setOption('landscape', false) // Opsional: gunakan mode landscape jika diperlukan
            ->showBackground() // Tampilkan background CSS
            ->margins(10, 10, 10, 10) // Set margin PDF (opsional)
            ->pdf();

        // Kirim file PDF sebagai download response
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="data-penduduk-pertumbuhan.pdf"');
    }
}
