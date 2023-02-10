<?php

namespace Database\Seeders;

use App\Models\PhotoGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhotoGallery::factory(100)->create();

        PhotoGallery::factory()->create([
            "language_id"=>2,
            "photo"=>"photo-1.jpg",
            "caption"=>"ဒါက ဓာတ်ပုံပါ။",
        ]);

        PhotoGallery::factory()->create([
            "language_id"=>2,
            "photo"=>"photo-1.jpg",
            "caption"=>"ဒါက ဓာတ်ပုံပါ။",
        ]);

        PhotoGallery::factory()->create([
            "language_id"=>2,
            "photo"=>"photo-2.jpg",
            "caption"=>"ဒါက ဓာတ်ပုံပါ။",
        ]);

        PhotoGallery::factory()->create([
            "language_id"=>2,
            "photo"=>"photo-3.jpg",
            "caption"=>"ဒါက ဓာတ်ပုံပါ။",
        ]);

        PhotoGallery::factory()->create([
            "language_id"=>2,
            "photo"=>"photo-4.jpg",
            "caption"=>"ဒါက ဓာတ်ပုံပါ။",
        ]);

        PhotoGallery::factory()->create([
            "language_id"=>2,
            "photo"=>"photo-5.jpg",
            "caption"=>"ဒါက ဓာတ်ပုံပါ။",
        ]);
    }
}
