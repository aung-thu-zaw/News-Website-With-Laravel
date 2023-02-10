<?php

namespace Database\Seeders;

use App\Models\VideoGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VideoGallery::factory(50)->create();

        VideoGallery::factory(50)->create([
            "language_id"=>2,
            "caption"=>"ဒါက ဗီဒီယိုပါ။"
        ]);
    }
}
