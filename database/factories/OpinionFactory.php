<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinion>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'title_en' => $this->faker->optional(0.7)->sentence,
            'body' => $this->faker->paragraphs(3, true),
            'body_en' => $this->faker->optional(0.7)->paragraphs(3, true),
            'slug' => $this->faker->unique()->slug,
            'cover' => $this->faker->optional()->imageUrl(),
            'url' => $this->faker->optional()->url,
        ];
    }
}
