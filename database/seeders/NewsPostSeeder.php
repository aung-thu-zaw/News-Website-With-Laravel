<?php

namespace Database\Seeders;

use App\Models\NewsPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // NewsPost::factory(3000)->create();
        $newsPosts=NewsPost::factory(3000)->make();

        $newsPosts->chunk(500)->each(function ($chunk) {
            NewsPost::insert($chunk->toArray());
        });

        DB::statement("update news_posts set created_at=now(),updated_at=now()");


        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-1.jpg","visitors"=>20]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-9.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-3.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-9.jpg","visitors"=>67]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-10.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-5.jpg","visitors"=>46]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-6.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-4.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-5.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-2.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-7.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-8.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-6.jpg","visitors"=>4]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-10.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-3.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-4.jpg","visitors"=>55]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-5.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-7.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-8.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-1.jpg","visitors"=>53]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-9.jpg","visitors"=>1]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-2.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-10.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-1.jpeg"]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-1.jpg","visitors"=>21]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-3.jpg","visitors"=>14]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-1.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-7.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-8.jpg","visitors"=>77]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-2.jpg","visitors"=>21]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-9.jpg","visitors"=>12]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-3.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-4.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-5.jpg","visitors"=>45]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-7.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-8.jpg","visitors"=>9]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-9.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>13,"thumbnail"=>"civil-war-10.jpg","visitors"=>23]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-3.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-2.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-2.jpg","visitors"=>98]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-9.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-4.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-6.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-5.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-6.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-8.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-4.jpg","visitors"=>4]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-10.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-1.jpg","visitors"=>6]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-2.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-7.jpg","visitors"=>58]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-4.jpg","visitors"=>77]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-5.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-3.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>1,"thumbnail"=>"africa-3.jpg","visitors"=>21]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-5.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-2.jpg","visitors"=>43]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-6.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-7.jpg","visitors"=>33]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-9.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-8.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-6.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-10.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-7.jpg","visitors"=>8]);
        NewsPost::factory()->create(["sub_category_id"=>15,"thumbnail"=>"tech-1.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>19,"thumbnail"=>"life-8.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>44,"thumbnail"=>"football-10.jpg"]);
        NewsPost::factory()->create(["sub_category_id"=>3,"thumbnail"=>"asian-6.jpg","visitors"=>12]);
        NewsPost::factory()->create(["sub_category_id"=>10,"thumbnail"=>"revolution-4.jpg"]);
    }
}
