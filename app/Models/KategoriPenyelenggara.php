<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPenyelenggara extends Model
{
    use HasFactory;

    protected $table = 'kategori_penyelenggara';

    protected $fillable = ['nama_penyelenggara'];

    public function laporanHarianCamats()
    {
        return $this->hasMany(LaporanHarianCamat::class, 'penyelenggara_id');
    }

    public function penyelenggaraCamat()
    {
        return $this->hasMany(LaporanCamat::class, 'penyelenggara_id');
    }
}
