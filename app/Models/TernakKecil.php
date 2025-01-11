<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class TernakKecil extends Model
{

    protected $table = 'ternak_kecil';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'string';

    protected $fillable = [
        'kambing',
        'babi',
        'domba',
        'kecamatan',
    ];

    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
