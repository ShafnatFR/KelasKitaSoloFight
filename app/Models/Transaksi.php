<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = [
        'bukti_transaksi',
        'status',
        'kelasId',
        'keranjangId',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId');
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'keranjangId');
    }
}