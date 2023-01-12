<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LiveVideo>
 */
class LiveVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "video_id"=>$this->faker->randomElement([
                "w_Ma8oQLmSM",
                "9Auq9mYxFEE",
                "pykpO5kQJ98",
                "pykpO5kQJ98",
                "h3MuIUNCCzI",

            ]),
            "title"=>$this->faker->sentence()
        ];
    }
}
