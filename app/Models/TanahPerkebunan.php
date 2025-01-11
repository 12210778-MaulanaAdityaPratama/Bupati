<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class TanahPerkebunan extends Model
{
    use HasFactory;

    protected $table = 'tanah_perkebunan';

    protected $primaryKey = 'id';

    public $incrementing = false;


    protected $fillable = [
        'kecamatan',
        'kelapa',
        'karet',
        'kelapa_sawit',
        'coklat',
        'tebu',
        'pinang',
        'sagu',
        'pala',
        'kopi',
        'sahang',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
