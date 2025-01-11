<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class TambangGalian extends Model
{
    use HasFactory;

    protected $table = 'tambang_galian';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::orderedUuid();
        });
    }

    protected $fillable = [
        'kecamatan',
        'nama',
        'status',
    ];
}
