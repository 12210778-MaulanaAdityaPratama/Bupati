<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'kode',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'tahun',
        'dasar_hukum',
        'koordinat',
        'peta_resmi',
        'utara',
        'timur',
        'selatan',
        'barat',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
