<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'userId' => User::factory(),
            'kelasId' => Kelas::factory(),
            'materiId' => Materi::factory(),
        ];
    }
}