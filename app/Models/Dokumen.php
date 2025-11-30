<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';
    protected $fillable = ['file_path'];

    public function submateri()
    {
        return $this->hasOne(Submateri::class, 'dokumenId');
    }
}