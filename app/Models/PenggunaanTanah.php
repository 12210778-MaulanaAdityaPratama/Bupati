<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PenggunaanTanah extends Model
{
    use HasFactory;

    protected $table = 'penggunaan_tanah';

    protected $primaryKey = 'id';

    protected $keyType = 'uuid';

    public $incrementing = false;

    protected $fillable = [
        'kecamatan',
        'tanah_sawah',
        'tanah_kering',
        'tanah_basah',
        'tanah_perkebunan',
        'tanah_fasilitas',
        'tanah_hutan',

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
