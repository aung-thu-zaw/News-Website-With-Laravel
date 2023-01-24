<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsPost>
 */
class NewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "sub_category_id"=>$this->faker->numberBetween(1, 47),
            "user_id"=>$this->faker->numberBetween(1, 5),
            "title"=>$this->faker->sentence(),
            "slug"=>$this->faker->slug(),
            "body"=>$this->faker->paragraph(50),
            "thumbnail"=>$this->faker->randomElement([
                "africa-1.jpg",
                "africa-2.jpg",
                "africa-3.jpg",
                "africa-4.jpg",
                "africa-5.jpg",
                "africa-6.jpg",
                "africa-7.jpg",
                "africa-8.jpg",
                "africa-9.jpg",
                "africa-10.jpg",
                "asian-1.jpg",
                "asian-2.jpg",
                "asian-3.jpg",
                "asian-4.jpg",
                "asian-5.jpg",
                "asian-6.jpg",
                "asian-7.jpg",
                "asian-8.jpg",
                "asian-9.jpg",
                "asian-10.jpg",
                "civil-war-1.jpg",
                "civil-war-2.jpg",
                "civil-war-3.jpg",
                "civil-war-4.jpg",
                "civil-war-5.jpg",
                "civil-war-6.jpg",
                "civil-war-7.jpg",
                "civil-war-8.jpg",
                "civil-war-9.jpg",
                "civil-war-10.jpg",
                "football-1.jpg",
                "football-2.jpg",
                "football-3.jpg",
                "football-4.jpg",
                "football-5.jpg",
                "football-6.jpg",
                "football-7.jpg",
                "football-8.jpg",
                "football-9.jpg",
                "football-10.jpg",
                "life-1.jpg",
                "life-2.jpg",
                "life-3.jpg",
                "life-4.jpg",
                "life-5.jpg",
                "life-6.jpg",
                "life-7.jpg",
                "life-8.jpg",
                "life-9.jpg",
                "life-10.jpg",
                "revolution-1.jpg",
                "revolution-2.jpg",
                "revolution-3.jpg",
                "revolution-4.jpg",
                "revolution-5.jpg",
                "revolution-6.jpg",
                "revolution-7.jpg",
                "revolution-8.jpg",
                "revolution-9.jpg",
                "revolution-10.jpg",
                "tech-1.jpg",
                "tech-2.jpg",
                "tech-3.jpg",
                "tech-4.jpg",
                "tech-5.jpg",
                "tech-6.jpg",
                "tech-7.jpg",
                "tech-8.jpg",
                "tech-9.jpg",
                "tech-10.jpg",
            ]),
            "visitors"=>0,
        ];
    }
}


// 'skills'=>$this->faker->randomElement(["Laravl","PHP 8","Wordpress","HTML-5","CSS-3","VueJs"], mt_rand(1, 6)),
