<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanHarianCamat extends Model
{
    use HasFactory;

    protected $table = 'laporan_harian_camat';

    protected $fillable = ['kecamatan', 'bulan', 'tahun', 'penyelenggara_id', 'bobot', 'capai', 'jumlah'];

    public function penyelenggara()
    {
        return $this->belongsTo(KategoriPenyelenggara::class, 'penyelenggara_id');
    }

    public function kegiatan()
    {
        return $this->belongsToMany(KegiatanModel::class, 'laporan_kegiatan', 'laporan_harian_camat_id', 'kegiatan_id');
    }
}
