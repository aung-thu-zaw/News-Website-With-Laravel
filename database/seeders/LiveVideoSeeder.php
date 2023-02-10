<?php

namespace Database\Seeders;

use App\Models\LiveVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiveVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LiveVideo::factory()->create([
            "video_id"=>"6lr9dtvK9D4",
            "title"=>"Turkey Earthquake Live",
        ]);

        LiveVideo::factory()->create([
            "language_id"=>"2",
            "video_id"=>"6lr9dtvK9D4",
            "title"=>"တူရကီမြေငလျင်တိုက်ရိုက်ထုတ်လွှင့်မှု",
        ]);
    }
}
