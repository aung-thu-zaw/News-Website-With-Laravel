<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LiveVideo;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            "favicon"=>"favicon.png",
            "logo"=>"logo.png"
        ]);


        $this->call([
            LanguageSeeder::class,
            UserSeeder::class,
            HomeAdvertisementSeeder::class,
            SidebarAdvertisementSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            NewsPostSeeder::class,
            PhotoGallerySeeder::class,
            VideoGallerySeeder::class,
            TrendingVideoSeeder::class,
            VideoNewsPostSeeder::class,
            PageSeeder::class,
            FaqSeeder::class,
            LiveVideoSeeder::class,
            TagSeeder::class
        ]);
    }
}
