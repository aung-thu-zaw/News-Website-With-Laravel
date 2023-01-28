<?php

namespace Database\Seeders;

use App\Models\VideoNewsPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoNewsPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VideoNewsPost::factory(20)->create(["sub_category_id"=>1]);
        VideoNewsPost::factory(20)->create(["sub_category_id"=>3]);
        VideoNewsPost::factory(20)->create(["sub_category_id"=>10]);
        VideoNewsPost::factory(20)->create(["sub_category_id"=>19]);
        VideoNewsPost::factory(20)->create(["sub_category_id"=>13]);
        VideoNewsPost::factory(20)->create(["sub_category_id"=>44]);
    }
}
