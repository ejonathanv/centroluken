<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Noticias',
        ]);

        Category::factory()->create([
            'name' => 'Artículos',
        ]);

        Category::factory()->create([
            'name' => 'Comunicados',
        ]);
    }
}
