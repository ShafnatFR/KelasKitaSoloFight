<?php

namespace Database\Factories;

use App\Models\Dokumen;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubmateriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'urutan' => fake()->numberBetween(1, 5),
            'judul' => fake()->sentence(4),
            'status' => fake()->randomElement(['pending', 'diterima', 'ditolak', 'dinonaktifkan']),
            // Pastikan relasi ini ada jika kolomnya tidak boleh null
            'dokumenId' => Dokumen::factory(),
            'videoId' => Video::factory(),
        ];
    }
}