<?php

namespace App\Filament\Resources\LaporanCamatResource\Pages;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\LaporanHarianCamat;
use Filament\Resources\Pages\Page;
use Illuminate\Routing\Controller;
use App\Filament\Resources\LaporanCamatResource;

class DownloadLaporanCamat extends Controller
{
    public function download()
    {
        $data = LaporanHarianCamat::all(); // Fetch semua data laporan

        $pdf = Pdf::loadView('pdf.laporan-camat', ['data' => $data]);

        return $pdf->download('laporan_camat.pdf');
    }
}
