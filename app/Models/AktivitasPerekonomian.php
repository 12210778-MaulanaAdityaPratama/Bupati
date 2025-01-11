<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class AktivitasPerekonomian extends Model
{
    use HasFactory;

    protected $table = 'aktivitas_perekonomian';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

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
        'jumlah',

    ];
}
