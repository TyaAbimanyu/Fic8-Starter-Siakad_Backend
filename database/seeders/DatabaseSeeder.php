<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Cara satu manggil langsung, dan dibuat random
        // User::factory(10)->create();

        //Cara dua, kita bisa buat user dengan data yang kita inginkan
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*
        Cara ketiga, kita bisa menggunakan seeder dari class lainnya,
        dikumpulkan dalam satu array, lalu diseeder
        */
        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
        ]);
    }
}
