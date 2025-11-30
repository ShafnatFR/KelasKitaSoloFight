<?php

namespace Database\Seeders;

// Pastikan meng-import semua model
use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Submateri;
use App\Models\Laporan;
use App\Models\Review;
use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\Progress;
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
        // 1. Buat 10 user murid
        $murids = User::factory(10)->create(['role' => 'murid']);
        
        // 2. Buat 5 kelas (otomatis bikin mentor)
        $kelas = Kelas::factory(5)->create();
        
        // 3. Buat Materi & Submateri untuk setiap kelas
        // Kita loop setiap kelas agar setiap kelas punya materi
        foreach ($kelas as $k) {
            $materiList = Materi::factory(4)->create(['kelasId' => $k->id]); // 4 materi per kelas
            
            // Opsional: Buat progress untuk beberapa murid di materi ini
            foreach ($murids->random(3) as $murid) {
                foreach ($materiList as $materi) {
                    Progress::factory()->create([
                        'userId' => $murid->id,
                        'kelasId' => $k->id,
                        'materiId' => $materi->id,
                    ]);
                }
            }
        }

        // 4. Buat Submateri (Global dummy)
        Submateri::factory(50)->create();

        // 5. SEEDING TAMBAHAN (Yang sebelumnya kosong)
        
        // Buat Laporan (Report) - Ambil acak dari user dan kelas yang ada
        Laporan::factory(5)->create(function () use ($murids, $kelas) {
            return [
                'userId' => $murids->random()->id,
                'kelasId' => $kelas->random()->id,
            ];
        });

        // Buat Review - Agar realistis, user mereview kelas yang ada
        Review::factory(10)->create(function () use ($murids, $kelas) {
            return [
                'userId' => $murids->random()->id,
                'kelasId' => $kelas->random()->id,
            ];
        });

        // Buat Keranjang
        Keranjang::factory(5)->create(function () use ($murids, $kelas) {
            return [
                'userId' => $murids->random()->id,
                'kelasId' => $kelas->random()->id,
            ];
        });

        // Buat Transaksi
        Transaksi::factory(8)->create(function () use ($murids, $kelas) {
            return [
                // Kita anggap transaksinya untuk kelas yang sudah ada
                'kelasId' => $kelas->random()->id,
                // Keranjang dibuat baru otomatis oleh factory, atau bisa di-override
            ];
        });
    }
}