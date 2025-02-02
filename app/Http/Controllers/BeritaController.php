<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\BeritaImage;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kata kunci dari input pencarian
        $search = $request->input('search');

        // Ambil data berita berdasarkan pencarian, jika ada
        $berita = Berita::when($search, function ($query, $search) {
            return $query->where('nama_berita', 'like', '%' . $search . '%')
                ->orWhere('isi_berita', 'like', '%' . $search . '%');
        })
            ->orderBy('created_at', 'desc') // Urutkan berdasarkan tanggal terbaru
            ->paginate(5); // Pagination dengan 5 item per halaman

        // Kirim data ke tampilan
        return view('berita.berita', compact('berita', 'search'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        $beritaLainnya = Berita::where('id', '!=', $id)->inRandomOrder()->take(3)->get();
        return view('berita.detailberita', compact('berita', 'beritaLainnya'));
    }
}
