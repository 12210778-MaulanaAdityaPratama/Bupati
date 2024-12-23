<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PekerjaanPenduduk extends Model
{
    protected $table = 'pekerjaan_penduduk';
    protected $fillable = ['kecamatan', 'pns', 'tni', 'polri', 'petani', 'nelayan', 'pedagang', 'buruh', 'lain'];
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
