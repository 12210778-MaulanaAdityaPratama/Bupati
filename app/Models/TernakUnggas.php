<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class TernakUnggas extends Model
{
    use HasFactory;

    protected $table = 'ternak_unggas';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'kecamatan',
        'ayam_kampung',
        'ayam_ras',
        'bebek',
        'angsa',
        'kelinci',
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
