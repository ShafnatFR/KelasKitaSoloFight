<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Keranjang;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'bukti_transaksi' => 'bukti/' . fake()->uuid() . '.jpg',
            'status' => fake()->randomElement(['pending', 'diterima', 'ditolak']),
            'kelasId' => Kelas::factory(),
            // Awas: Logic ini membuat keranjang baru setiap transaksi dibuat.
            // Idealnya ambil id keranjang yang sesuai dengan user jika ada logic bisnis tertentu.
            'keranjangId' => Keranjang::factory(), 
        ];
    }
}