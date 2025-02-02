<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\BeritaImage;

use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_berita',
        'isi_berita',
        'gambar',
    ];

    // Mutator untuk menyimpan hanya nama file
    // public function setGambarAttribute($value)
    // {
    //     // Simpan hanya nama file, bukan path lengkap
    //     $this->attributes['gambar'] = basename($value); // Ambil hanya nama file
    // }

    // // Accessor untuk mengambil URL gambar lengkap
    // public function getGambarUrlAttribute()
    // {
    //     return $this->gambar ? asset('storage/berita-images/' . $this->gambar) : null;
    // }
    public function gambarBerita(): HasMany
    {
        return $this->hasMany(BeritaImage::class, 'berita_id');
    }
}
