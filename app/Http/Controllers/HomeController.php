<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data berita terbaru dari database
        $berita = Berita::latest()->take(6)->get();

        // Mengirim data berita ke view
        return view('home', compact('berita'));
    }
}
