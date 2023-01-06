<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()->create(["title"=>"About Us"]);
        Page::factory()->create(["title"=>"FAQ"]);
        Page::factory()->create(["title"=>"Contact Us","map"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62335.459515144175!2d98.58630907869401!3d12.451970596701331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30fbb04dd43ed2db%3A0x4d1bccdd01a793d3!2z4YCZ4YC84YCt4YCQ4YC6!5e0!3m2!1smy!2smm!4v1672982872315!5m2!1smy!2smm"]);
        Page::factory()->create(["title"=>"Terms And Conditions"]);
        Page::factory()->create(["title"=>"Privacy And Policy"]);
        Page::factory()->create(["title"=>"Disclaimer"]);
    }
}
