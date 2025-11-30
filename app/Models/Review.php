<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';
    protected $fillable = ['bintang', 'isi_review', 'userId', 'kelasId'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId');
    }
}