<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PengelolaanPangan extends Model
{
    use HasFactory;

    protected $table = 'pengelolaan_pangan';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }

    protected $fillable = [
        'kecamatan',
        'nama',
        'jumlah',
    ];
}
