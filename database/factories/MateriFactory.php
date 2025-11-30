<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'urutan' => fake()->numberBetween(1, 10),
            'judul' => fake()->sentence(4),
            'status' => fake()->randomElement(['pending', 'diterima', 'ditolak', 'dinonaktifkan']),
            'kelasId' => Kelas::factory(),
        ];
    }
}