<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanModel extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';

    protected $fillable = ['nama_kegiatan'];

    public function laporanHarianCamats()
    {
        return $this->belongsToMany(LaporanHarianCamat::class, 'laporan_kegiatan', 'kegiatan_id', 'laporan_harian_camat_id');
    }
    public function KegiatanCamat()
    {
        return $this->belongsToMany(LaporanCamat::class, 'kegiatan_laporan_pivot', 'kegiatan_id', 'laporan_camat_id');
    }
}
