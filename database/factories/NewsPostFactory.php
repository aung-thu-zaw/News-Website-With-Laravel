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
            "sub_category_id"=>$this->faker->numberBetween(1, 49),
            "user_id"=>$this->faker->numberBetween(1, 10),
            "title"=>$this->faker->sentence(),
            "slug"=>$this->faker->slug(),
            "body"=>$this->faker->paragraph(50),
            "thumbnail"=>"https://www.vuelio.com/uk/wp-content/uploads/2019/02/Breaking-News.jpg",
            "visitors"=>0,
            "share_link"=>"loaclhost:89000"
        ];
    }
}
