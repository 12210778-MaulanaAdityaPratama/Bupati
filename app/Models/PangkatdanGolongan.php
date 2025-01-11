<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class PangkatdanGolongan extends Model
{
    use HasFactory;

    protected $table = 'pangkatdan_golongan';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['kecamatan', 'i', 'ii', 'iii', 'iv'];

    public $timestamps = false;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
    public function jumlah(): int
    {
        return ($this->i ?? 0) + ($this->ii ?? 0) + ($this->iii ?? 0) + ($this->iv ?? 0);
    }
    public function getJumlahAttribute(): int
    {
        return ($this->i ?? 0) + ($this->ii ?? 0) + ($this->iii ?? 0) + ($this->iv ?? 0);
    }
}
