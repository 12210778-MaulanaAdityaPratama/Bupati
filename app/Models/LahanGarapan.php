<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class LahanGarapan extends Model
{
    use HasFactory;

    protected $table = 'lahan_garapan';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';


    protected $fillable = [
        'kecamatan',
        'padi',
        'jagung',
        'ubi_kayu',
        'kacang_panjang',
        'kangkung',
        'cabe',
        'jeruk_nipis',
        'terong',
        'mentimun',
        'talas',
        'tomat',
        'kacang_tahan',
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
