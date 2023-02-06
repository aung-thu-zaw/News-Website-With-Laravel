<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            "name"=>"English",
            "short_name"=>"en",
            "is_default"=>"yes"
        ]);
        Language::create([
            "name"=>"Myanmar",
            "short_name"=>"my",
            "is_default"=>"yes"
        ]);
    }
}
