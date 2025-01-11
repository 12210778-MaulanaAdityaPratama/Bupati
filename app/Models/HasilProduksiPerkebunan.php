<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class HasilProduksiPerkebunan extends Model
{
    use HasFactory;

    protected $table = 'hasil_produksi_perkebunan';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    protected $fillable = [
        'kecamatan',
        'jenis_perkebunan',
        'jumlah',
    ];
}
