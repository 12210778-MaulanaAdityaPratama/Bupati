<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class UsahaPeternakan extends Model
{
    use HasFactory;

    protected $table = 'usaha_peternakan';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'kecamatan',
        'peternakan_besar',
        'peternakan_kecil',
        'ternak_unggas',
        'pemotongan_ayam',
        'pakan_ternak',
        'usaha_bibit',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
