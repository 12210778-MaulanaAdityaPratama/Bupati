<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class JumlahObyekWisata extends Model
{
    use HasFactory;
    protected $table = 'jumlah_obyek_wisata';
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public $incrementing = false;


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::orderedUuid();
        });
    }
    protected $fillable = [
        'kecamatan',
        'nama_obyek',
        'jumlah',
    ];
    protected $casts = [
        'nama_obyek' => 'array',
    ];
}
