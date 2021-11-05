<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Team;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->randomNumber(),
            'email' => $this->faker->safeEmail,
            'facebook' => $this->faker->word,
            'contact' => $this->faker->word,
            'twitter' => $this->faker->word,
            'instagram' => $this->faker->word,
            'designation' => $this->faker->word,
            'description' => $this->faker->text,
        ];
    }
}
