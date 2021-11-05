<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'view' => $this->faker->randomNumber(),
            'slug' => $this->faker->slug,
            'publishAt' => $this->faker->dateTime(),
            'publishStatus' => $this->faker->boolean,
            'image' => $this->faker->word,
        ];
    }
}
