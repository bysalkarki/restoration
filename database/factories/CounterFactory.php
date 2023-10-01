<?php

namespace Database\Factories;

use App\Models\Counter;
use Illuminate\Database\Eloquent\Factories\Factory;

class CounterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween(1, 10, 2),
            'min' => $this->faker->numberBetween(1, 10),
            'max' => $this->faker->numberBetween(100, 200),
            'prefix' => $this->faker->bloodRh(),
            'type' => array_rand(Counter::TYPE),
        ];
    }
}
