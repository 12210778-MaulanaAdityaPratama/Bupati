<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = ['kecamatan'];


    public function users()
    {
        return $this->hasMany(User::class, 'kecamatan_id');
    }
}
