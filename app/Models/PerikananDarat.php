<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PerikananDarat extends Model
{
    use HasFactory;

    protected $table = 'perikanan_darat';

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'kecamatan',
        'perairan',
        'tambak',
        'kolam',
        'mina_padi'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
