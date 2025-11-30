<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kategori' => fake()->randomElement(['materi tidak sesuai', 'kualitas']),
            'keterangan' => fake()->paragraph(),
            'userId' => User::factory(),
            'kelasId' => Kelas::factory(),
        ];
    }
}