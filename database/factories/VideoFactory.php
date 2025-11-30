<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_path' => 'video/' . fake()->uuid() . '.mp4',
        ];
    }
}