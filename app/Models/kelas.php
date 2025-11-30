<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'profil',
        'badge',
        'deskripsi',
        'status',
        'mentorId',
    ];

    // Relasi ke Mentor (User)
    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentorId');
    }

    // Relasi ke Materi
    public function materi()
    {
        return $this->hasMany(Materi::class, 'kelasId');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'kelasId');
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'kelasId');
    }
}