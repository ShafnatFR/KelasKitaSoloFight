<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'progress';
    protected $fillable = ['userId', 'kelasId', 'materiId'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId');
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materiId');
    }
}