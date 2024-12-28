<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanCamat extends Model
{

    use HasFactory;

    protected $table = 'laporan_camat';

    protected $fillable = [
        'kegiatan_id',
        'penyelenggara_id',
        'tanggal',
        'waktu',
        'hari',
        'bulan',
        'tahun',
        'tempat_pelaksanaan',
        'keterangan',
        'kendala',
        'kecamatan',
    ];

    public function kegiatanCamatDetail()
    {
        return $this->belongsTo(KegiatanModel::class, 'kegiatan_id');
    }
    public function penyelenggaraCamatDetail()
    {
        return $this->belongsTo(KategoriPenyelenggara::class, 'penyelenggara_id');
    }
}
