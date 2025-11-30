<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submateri extends Model
{
    use HasFactory;

    protected $table = 'submateri';

    protected $fillable = [
        'urutan',
        'judul',
        'status',
        'dokumenId',
        'videoId',
    ];

    public function dokumen()
    {
        return $this->belongsTo(Dokumen::class, 'dokumenId');
    }

    public function video()
    {
        return $this->belongsTo(Video::class, 'videoId');
    }
}