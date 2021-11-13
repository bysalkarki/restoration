<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Menu;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'position' => $this->faker->randomNumber(),
            'metaTitle' => $this->faker->word,
            'metaDescription' => $this->faker->text,
            'metaKeyphrase' => $this->faker->word,
            'parallexImage' => $this->faker->word,
            'featuredImage' => $this->faker->word,
            'publishStatus' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime(),
            'type' => array_rand((new Menu())->getType()),
            'externalUrl' => $this->faker->word,
        ];
    }
}
