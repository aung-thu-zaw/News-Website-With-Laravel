<?php

namespace Database\Seeders;

use App\Models\TrendingVideo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrendingVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrendingVideo::factory(10)->create();
    }
}
