<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'role',
        'status',
        'deskripsi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi sebagai Mentor (memiliki banyak kelas)
    public function kelasMentor()
    {
        return $this->hasMany(Kelas::class, 'mentorId');
    }

    // Relasi User memiliki keranjang
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'userId');
    }

    // Relasi Review
    public function reviews()
    {
        return $this->hasMany(Review::class, 'userId');
    }
}