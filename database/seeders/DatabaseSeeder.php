<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 10 user murid
        \App\Models\User::factory(10)->create(['role' => 'murid']);
        
        // Buat 5 kelas, masing-masing otomatis bikin mentor
        \App\Models\Kelas::factory(5)->create();
        
        // Buat materi & submateri dummy
        \App\Models\Materi::factory(20)->create();
        \App\Models\Submateri::factory(50)->create();
    }
}
