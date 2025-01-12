<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data berita terbaru dari database
        $berita = Berita::latest()->take(6)->get();
        $slider = Slider::all();

        // Mengirim data berita ke view
        return view('home', compact('berita', 'slider'));
    }
}
