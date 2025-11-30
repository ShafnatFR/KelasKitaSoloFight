<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $fillable = ['kategori', 'keterangan', 'userId', 'kelasId'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId');
    }
}