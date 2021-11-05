<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Appsetting;

class AppsettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appsetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'value' => $this->faker->text,
            'type' => $this->faker->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}
