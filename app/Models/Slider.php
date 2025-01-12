<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\Facades\Image; // Tambahkan ini untuk manipulasi gambar
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
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->isDirty('gambar') && $model->gambar) {
                $filePath = storage_path('app/public/slider-images/' . $model->gambar);

                // Cek apakah file gambar ada
                if (file_exists($filePath)) {
                    // Buka gambar
                    $source = imagecreatefromstring(file_get_contents($filePath));

                    // Ubah ukuran gambar
                    $width = 3256;
                    $height = 814;
                    $resizedImage = imagescale($source, $width, $height);

                    // Simpan gambar
                    imagejpeg($resizedImage, $filePath, 90); // 90 adalah kualitas gambar
                    imagedestroy($source);
                    imagedestroy($resizedImage);
                }
            }
        });
    }
}
