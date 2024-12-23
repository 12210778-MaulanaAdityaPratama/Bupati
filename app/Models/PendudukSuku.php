<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PendudukSuku extends Model
{
    use HasFactory;
    protected $table = 'penduduk_suku';
    protected $fillable = [
        'kecamatan',
        'jawa',
        'melayu',
        'bugis',
        'dayak',
        'cina',
        'sunda',
        'batak',
        'madura',
    ];
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }
}
