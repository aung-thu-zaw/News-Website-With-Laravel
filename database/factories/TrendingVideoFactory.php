<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrendingVideo>
 */
class TrendingVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "language_id"=>1,
            "video_id"=>$this->faker->randomElement([
                "LTJU9YWfmFU",
                "ardtvdR28SQ",
                "EOnZswhnOzM",
                "jBEgDVmuUxM",
                "dz_lyFG8kr8",
                "zN8Vo_2xO-Q",
                "_lgcmYSePGA",
                "Voiae2-E-7Y",
                "5vaVfl_zmCY",
                "TEEnKA3sVK8",
            ]),
            "owner"=>$this->faker->name(),
            "caption"=>$this->faker->sentence()
        ];
    }
}
