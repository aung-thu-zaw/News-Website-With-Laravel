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
        User::factory()->create([
            "name"=>"Aung Thu Zaw",
            "email"=>"aungthuzaw@gmail.com",
            "password"=>bcrypt("1111111111"),
            "is_admin"=>true
        ]);

        Setting::create([
            "favicon"=>"favicon.png",
            "logo"=>"logo.png"
        ]);
        User::factory(9)->create();

        $this->call([
            HomeAdvertisementSeeder::class,
            SidebarAdvertisementSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            NewsPostSeeder::class,
            PhotoSeeder::class,
            VideoSeeder::class,
            TrendingVideoSeeder::class,
            VideoNewsPostSeeder::class,
            PageSeeder::class,
            FaqSeeder::class,
            LiveVideoSeeder::class,
        ]);
    }
}
