<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LuasWilayah;
use Spatie\Browsershot\Browsershot;

class WilayahController extends Controller
{
    public function index(Request $request)
    {
        $data = LuasWilayah::all();
        return view('admin.wilayah.pdf', compact('data'));
    }
    public function download(Request $request)
    {
        $data = LuasWilayah::all();

        // Render HTML dari Blade
        $html = view('admin.wilayah.pdf', compact('data'))->render();

        // Buat PDF dengan Browsershot
        $pdf = Browsershot::html($html)
            ->setOption('landscape', false) // Opsional: gunakan mode landscape jika diperlukan
            ->showBackground() // Tampilkan background CSS
            ->margins(10, 10, 10, 10) // Set margin PDF (opsional)
            ->pdf();

        // Kirim file PDF sebagai download response
        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="data-wilayah.pdf"');
    }
}
