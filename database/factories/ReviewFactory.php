<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'bintang' => fake()->randomElement([1, 2, 3, 4, 5]),
            'isi_review' => fake()->sentence(),
            'userId' => User::factory(),
            'kelasId' => Kelas::factory(),
        ];
    }
}