<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BeritaImage extends Model
{
    protected $table = 'berita_gambar';
    protected $fillable = ['berita_id', 'gambar'];

    public function berita(): BelongsTo
    {
        return $this->belongsTo(Berita::class, 'berita_id');
    }
}
