<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class LuasHutanMenurutStatus extends Model
{
    use HasFactory;
    protected $table = 'luas_hutan_menurut_status';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    protected $fillable = [
        'kecamatan',
        'jenis_hutan',
        'jumlah',

    ];
}
