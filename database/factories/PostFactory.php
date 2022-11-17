<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
/* 
        $title = $this->faker->unique()->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(250),
            'status' => $this->faker->randomElement([1, 2]),
            'category_id' => Category::all()->random()->id, 
            'user_id' => User::all()->random()->id
        ]; */
    }
}
