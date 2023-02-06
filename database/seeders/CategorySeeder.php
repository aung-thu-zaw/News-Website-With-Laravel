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
        // English Language
        Category::create([
            "language_id"=>1,
            "name"=>"World",
            "slug"=>"world",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Politics",
            "slug"=>"politics",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Business",
            "slug"=>"business",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Health",
            "slug"=>"health",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Entertainment",
            "slug"=>"entertainment",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Technology",
            "slug"=>"technology",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Life Style",
            "slug"=>"life-style",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Travel",
            "slug"=>"travel",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>1,
            "name"=>"Sports",
            "slug"=>"sports",
            "status"=>"show"
        ]);




        // Myanmar Language
        Category::create([
            "language_id"=>2,
            "name"=>"ကမ္ဘာ",
            "slug"=>"ကမ္ဘာ",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"နိုင်ငံရေး",
            "slug"=>"နိုင်ငံရေး",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"စီးပွားရေး",
            "slug"=>"စီးပွားရေး",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"ကျန်းမာရေး",
            "slug"=>"ကျန်းမာရေး",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"ဖျော်ဖြေရေး",
            "slug"=>"ဖျော်ဖြေရေး",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"နည်းပညာ",
            "slug"=>"နည်းပညာ",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"နေထိုင်မှုပုံစံ",
            "slug"=>"နေထိုင်မှုပုံစံ",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"ခရီးသွား",
            "slug"=>"ခရီးသွား",
            "status"=>"show"
        ]);
        Category::create([
            "language_id"=>2,
            "name"=>"အားကစား",
            "slug"=>"အားကစား",
            "status"=>"show"
        ]);
    }
}
