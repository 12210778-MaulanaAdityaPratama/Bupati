<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class JumlahTenagaGuruMenurutPendidikan extends Model
{
    use HasFactory;

    protected $table = 'jumlah_tenaga_guru_menurut_pendidikan';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['kecamatan', 'nama', 'jumlah'];

    public $timestamps = false;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
