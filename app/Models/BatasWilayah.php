<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class BatasWilayah extends Model
{
    use HasFactory;

    protected $table = 'batas_wilayah';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'kecamatan',
        'utara',
        'selatan',
        'barat',
        'timur',
        'batas',
        'keterangan',
    ];
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
