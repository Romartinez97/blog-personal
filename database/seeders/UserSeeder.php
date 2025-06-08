<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Usuario Simple',
            'email' => 'user@example.com',
            'password' => bcrypt('user123'),
            'role_id' => 2
        ]);
    }
}
