<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->sentence(3),
            'kategori' => fake()->randomElement(['it', 'kuliner']),
            'harga' => fake()->numberBetween(0, 1000000),
            'profil' => 'images/kelas/default.jpg', // Dummy path
            'badge' => fake()->word(),
            'deskripsi' => fake()->paragraph(),
            'status' => fake()->randomElement(['draft', 'non-aktif', 'aktif']),
            // Membuat user baru sebagai mentor secara otomatis
            'mentorId' => User::factory()->state(['role' => 'mentor']),
        ];
    }
}
