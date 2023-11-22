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
            'name' => 'El Río Colorado',
            'name_en' => 'The Colorado River',
        ]);

        TopiCategory::factory()->create([
            'name' => 'Sequías y escasez de agua',
            'name_en' => 'Droughts and water scarcity',
        ]);
        
        TopiCategory::factory()->create([
            'name' => 'Desalinización de agua y otras fuentes de suministro',
            'name_en' => 'Water desalination and other supply sources',
        ]);
        
        TopiCategory::factory()->create([
            'name' => 'Tratamiento y reutilización de aguas',
            'name_en' => 'Water treatment and reuse',
        ]);
        
        TopiCategory::factory()->create([
            'name' => 'Recursos naturales y cambio climático',
            'name_en' => 'Natural resources and climate change',
        ]);
        
    }
}
