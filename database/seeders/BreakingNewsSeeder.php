<?php

namespace Database\Seeders;

use App\Models\BreakingNews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreakingNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BreakingNews::factory(15)->create(["user_id"=>1,"sub_category_id"=>1]);
    }
}
