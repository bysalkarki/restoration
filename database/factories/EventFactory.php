<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'summary' => $this->faker->text,
            'description' => $this->faker->text,
            'image' => $this->faker->word,
            'date' => $this->faker->dateTime(),
            'position' => $this->faker->randomNumber(),
            'publishStatus' => $this->faker->boolean,
            'location' => $this->faker->word,
            'venue' => $this->faker->word,
        ];
    }
}
