<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider';

    protected $primaryKey = 'id';


    protected $fillable = [
        'judul',
        'gambar',
    ];

    public function setGambarAttribute($value)
    {
        // Simpan hanya nama file, bukan path lengkap
        $this->attributes['gambar'] = basename($value); // Ambil hanya nama file
    }

    // Accessor untuk mengambil URL gambar lengkap
    public function getGambarUrlAttribute()
    {
        return $this->gambar ? asset('storage/slider-images/' . $this->gambar) : null;
    }
}
