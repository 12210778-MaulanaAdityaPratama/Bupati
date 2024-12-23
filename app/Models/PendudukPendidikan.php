<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PendudukPendidikan extends Model
{
    use HasFactory;

    protected $table = 'penduduk_pendidikan';

    protected $primaryKey = 'id';

    public $incrementing = false;


    protected $fillable = [
        'kecamatan',
        'tidak_sekolah',
        'sd',
        'smp',
        'sma',
        'akademi',
        'universitas',
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
