<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DokumenFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_path' => 'dokumen/' . fake()->uuid() . '.pdf',
        ];
    }
}