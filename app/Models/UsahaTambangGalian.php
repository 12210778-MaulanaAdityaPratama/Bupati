<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class UsahaTambangGalian extends Model
{
    use HasFactory;

    protected $table = 'usaha_tambang_galian';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }
    protected $fillable = [
        'kecamatan',
        'nama',
        'jumlah',
    ];
}
