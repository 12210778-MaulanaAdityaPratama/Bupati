<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PendudukPertumbuhan extends Model
{
    use HasFactory;

    protected $table = 'penduduk_pertumbuhan';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'kecamatan',
        'jumlah_penduduk_thn_ini',
        'jumlah_penduduk_thn_lalu',
        'pertumbuhan',
    ];
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid()->toString();
        });
    }
}
