<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoNewsPost>
 */
class VideoNewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id"=>$this->faker->numberBetween(1, 6),
            "sub_category_id"=>$this->faker->numberBetween(1, 47),
            "title"=>$this->faker->sentence(),
            "slug"=>$this->faker->slug(),
            "body"=>$this->faker->paragraph(50),
            "video_id"=>$this->faker->randomElement([
                "cBkDKL41jC4",
                "mh6ibTHsxyE",
                "KT-HYDQONCc",
                "W28w3Hv3xfI",
                "IOwQmSc2I3A",
                "urStuEJod_g",
                "Nm47m_t8tsQ",
                "jxt2VbqT-m8",

            ]),
            "visitors"=>0,
            'created_at' => $this->faker->dateTimeBetween('-30 days', now()),
        ];
    }
}
