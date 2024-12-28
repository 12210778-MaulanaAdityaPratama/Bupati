<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use filament\Panel;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;




    public function canAccessPanel(Panel $panel): bool
    {
        // Mengecek jika panel yang diakses adalah admin
        if ($panel->getId() === 'admin') {
            // Jika panel yang diakses adalah admin
            if (!$this->role === 'admin' || !$this->is_admin) {
                // Jika user adalah admin, lempar pengecualian
                throw new AuthorizationException('Kecamatan tidak dapat mengakses Panel Admin.');
            }
            return true;
        }

        // Mengecek jika panel yang diakses adalah kecamatan
        if ($panel->getId() === 'kecamatan') {
            if ($this->role === 'admin' || $this->is_admin) {
                // Jika user adalah admin, lempar pengecualian
                throw new AuthorizationException('Admin tidak dapat mengakses Panel Kecamatan.');
            }
            return true;
        }

        // Untuk panel lainnya, lempar pengecualian jika tidak dikenali
        throw new AuthorizationException('Panel tidak ditemukan.');

        // Ambil ID dari panel yang sedang diakses
        // $panelId = $panel->getId();
        // // Atau menggunakan dump untuk tampilan langsung (jika di development)
        // dd("Panel ID: " . $panelId);
    }





    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'kecamatan_id',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
        ];
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}
