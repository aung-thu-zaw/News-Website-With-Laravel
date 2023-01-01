<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
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
                "euP0mBlAn2Q",
                "dgg9M5nuLTA",
                "98FkRIbihyQ",
                "nIoXOplUvAw",
                "9xAumJRKV6A",
                "irWAjPQyYzg",
                "DAAwy_l4jw4",
                "vruB_WNbknw",
                "hXd4KEqrYEE",
                "wrR6QlAxvPs",
            ]),
            "owner"=>$this->faker->name(),
            "caption"=>$this->faker->sentence()
        ];
    }
}
