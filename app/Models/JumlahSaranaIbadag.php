<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class JumlahSaranaIbadag extends Model
{
    use HasFactory;

    protected $table = 'jumlah_sarana_ibadah';

    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
    protected $fillable = [
        'sarana_ibadah',
        'jumlah',
        'kecamatan',
    ];
}
