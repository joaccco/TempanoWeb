<?php

namespace Database\Factories;

use App\Models\Fridge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fridge>
 */
class FridgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Fridge::class;

    public function definition()
    {
            return [
                'number'=> $this->faker->unique()->randomNumber(),
                'brand'=> $this->faker->unique()->word(5),
                'capability'=> $this->faker->word(5)
            ];
    }
}
