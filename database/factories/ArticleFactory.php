<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence;
        $category = Category::inRandomOrder()->first();

        return [
            'title' => $title,
            'excerpt' => $this->faker->paragraph,
            'body' => $this->faker->paragraphs(3, true),
            'cover' => $this->faker->imageUrl(640, 480),
            'slug' => \Str::slug($title),
            'category_id' => $category->id,
            'published' => $this->faker->boolean,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
