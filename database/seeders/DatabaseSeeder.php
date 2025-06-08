<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Primero: seeders que generan datos requeridos
        $this->call([
            RolesTableSeeder::class,
            CategorySeeder::class,
        ]);

        // Luego: seeders que dependen de los anteriores
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}
