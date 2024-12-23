<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PendudukUmur extends Model
{
    use HasFactory;
    protected $table = 'penduduk_umur';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'kecamatan',
        'thn_0_4thn',
        'thn_5_9thn',
        'thn_10_14thn',
        'thn_15_19thn',
        'thn_20_24thn',
        'thn_25_29thn',
        'thn_30_34thn',
        'thn_35_39thn',
        'thn_40_59thn',
        'thn_60thn',

    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::orderedUuid();
        });
    }
}
