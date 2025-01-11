<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class JumlahAnakSekolah extends Model
{
    use HasFactory;

    protected $table = 'jumlah_anak_sekolah';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['kecamatan', 'kategori', 'sd', 'mi', 'sltp', 'mts', 'slta', 'aliyah'];

    public $timestamps = false;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
