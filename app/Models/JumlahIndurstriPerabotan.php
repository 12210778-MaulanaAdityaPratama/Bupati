<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class JumlahIndurstriPerabotan extends Model
{
    use HasFactory;

    protected $table = 'jumlah_industri_perabotan';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public $incrementing = false;

    protected static function boot()
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
