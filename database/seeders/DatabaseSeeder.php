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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ferdi Yansah',
            'email' => '2310631170084@student.unsika.ac.id',
            'npm' => '2310631170084',
            'kelas' => '5F - Teknik Informatika',
            'mata_kuliah' => 'Pemrograman Web Framework',
        ]);
    }
}
