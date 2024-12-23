<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PendudukAgama extends Model
{
    use HasFactory;

    protected $table = 'penduduk_agama';
    protected $primaryKey = 'id';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'kecamatan',
        'islam',
        'kristen',
        'katolik',
        'hindu',
        'budha',
        'konghucu',
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
