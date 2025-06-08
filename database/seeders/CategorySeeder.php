<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Rock', 'Metal', 'Pop', 'Electronic', 'Rap', 'Indie', 'Jazz'];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
