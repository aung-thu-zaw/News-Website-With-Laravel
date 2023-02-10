<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoGallery>
 */
class PhotoGalleryFactory extends Factory
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
            "photo"=>$this->faker->randomElement([
                "photo-1.jpg",
                "photo-2.jpg",
                "photo-3.jpg",
                "photo-4.jpg",
                "photo-5.jpg",
                "photo-6.jpg",
                "photo-7.jpg",
                "photo-8.jpg",
                "photo-9.jpg",
                "photo-10.jpg",
                "photo-11.jpg",
                "photo-12.jpg",
                "photo-13.jpg",
                "photo-14.jpg",
                "photo-15.jpg",
                "photo-16.jpg",
                "photo-17.jpg",
                "photo-18.jpg",
                "photo-19.jpg",
                "photo-20.jpg",
                "photo-21.jpg",
                "photo-22.jpg",
                "photo-23.jpg",
                "photo-24.jpg",
                "photo-25.jpg",
                "photo-26.jpg",
                "photo-27.jpg",
                "photo-28.jpg",
                "photo-29.jpg",
                "photo-30.jpg",
                "photo-31.jpg",
                "photo-32.jpg",
                "photo-33.jpg",
                "photo-34.jpg",
                "photo-35.jpg",
                "photo-36.jpg",
                "photo-37.jpg",
                "photo-38.jpg",
                "photo-39.jpg",
                "photo-40.jpg",
                "photo-41.jpg",
                "photo-42.jpg",
                "photo-43.jpg",
                "photo-44.jpg",
                "photo-45.jpg",
                "photo-46.jpg",
                "photo-47.jpg",
                "photo-48.jpg",
            ]),
            "owner"=>$this->faker->name(),
            "caption"=>"This is Photo",
        ];
    }
}
