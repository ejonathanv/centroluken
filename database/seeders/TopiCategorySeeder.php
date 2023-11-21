<?php

namespace Database\Seeders;

use App\Models\TopiCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopiCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopiCategory::factory()->create([
            'name' => 'El Río Colorado'
        ]);

        TopiCategory::factory()->create([
            'name' => 'Sequías y escasez de agua',
        ]);
        
        TopiCategory::factory()->create([
            'name' => 'Desalinización de agua y otras fuentes de suministro',
        ]);
        
        TopiCategory::factory()->create([
            'name' => 'Tratamiento y reutilización de aguas',
        ]);
        
        TopiCategory::factory()->create([
            'name' => 'Recursos naturales y cambio climático',
        ]);
        
    }
}
