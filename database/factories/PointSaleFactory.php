<?php

namespace Database\Factories;

use App\Models\Fridge;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PointSale>
 */
class PointSaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name= $this->faker->unique()->word(10);
            return [
                'name' => $name,
                'location' => $this->faker->sentence(),
                'fridge_id' => Fridge::all()->random()->id,
                'user_id' => User::all()->random()->id,
            ];
    }
}
