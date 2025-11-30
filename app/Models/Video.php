<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';
    protected $fillable = ['file_path'];

    public function submateri()
    {
        return $this->hasOne(Submateri::class, 'videoId');
    }
}