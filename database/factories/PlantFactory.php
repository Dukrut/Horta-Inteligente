<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'current_moisture' => $this->faker->numberBetween(0, 100),
            'minimum_moisture' => $this->faker->numberBetween(0, 100),
            'hydrated' => $this->faker->boolean
        ];
    }
}
