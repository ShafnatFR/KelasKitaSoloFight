<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeranjangFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kelasId' => Kelas::factory(),
            'userId' => User::factory()->state(['role' => 'murid']),
        ];
    }
}