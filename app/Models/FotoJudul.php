<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class FotoJudul extends Model
{
    use HasFactory;

    protected $table = 'foto_judul';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['judul', 'kecamatan', 'foto'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
    public function setFotoUrlAttribute($value)
    {
        // Simpan hanya nama file, bukan path lengkap
        $this->attributes['foto'] = basename($value); // Ambil hanya nama file
    }

    // Accessor untuk mengambil URL gambar lengkap
    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/' . $this->foto) : null;
    }
}
