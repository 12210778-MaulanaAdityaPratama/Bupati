<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class JumlahPenduduk extends Model
{
    use HasFactory;

    protected $table = 'jumlah_penduduk';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['kecamatan', 'kk', 'laki_laki', 'perempuan'];
    protected $keyType = 'string';

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
