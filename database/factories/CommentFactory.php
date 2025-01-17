<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 11, //rand(1, 10),
            'wiki_id' => rand(40, 60),
            'comment' => fake()->realText(),
            'vote' => 0 // rand(0, 20)
        ];
    }
}
