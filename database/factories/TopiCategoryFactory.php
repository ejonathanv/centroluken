<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopiCategory>
 */
class TopiCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->word;
        $slug = Str::slug($name);
        $name_en = $this->faker->word;
        $slug_en = Str::slug($name_en);

        return [
            'name' => $name,
            'name_en' => $name_en,
            'slug' => $slug,
            'slug_en' => $slug_en,
        ];
    }
}
