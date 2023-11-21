<?php

namespace Database\Factories;

use App\Models\TopiCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $topicCategoryId = TopiCategory::inRandomOrder()->first()->id;
        $sources = [
            'The New York Times',
            'The Washington Post',
            'The Wall Street Journal',
            'The Guardian',
            'The Economist',
        ];
        $source = $sources[array_rand($sources)];

        return [
            'title' => $this->faker->sentence,
            'title_en' => $this->faker->sentence,
            'category_id' => $topicCategoryId,
            'description' => $this->faker->paragraph,
            'description_en' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'source' => $source,
            'author' => $this->faker->name,
            'published_at' => $this->faker->dateTime,
        ];
    }
}
