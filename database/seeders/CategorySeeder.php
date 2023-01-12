<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "name"=>"World",
            "slug"=>"world",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Politics",
            "slug"=>"politics",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Business",
            "slug"=>"business",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Health",
            "slug"=>"health",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Entertainment",
            "slug"=>"entertainment",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Technology",
            "slug"=>"technology",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Life Style",
            "slug"=>"life-style",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Travel",
            "slug"=>"travel",
            "status"=>"show"
        ]);
        Category::create([
            "name"=>"Sports",
            "slug"=>"sports",
            "status"=>"show"
        ]);
    }
}
