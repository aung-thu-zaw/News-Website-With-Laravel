<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // World
        SubCategory::create([
            "category_id"=>1,
            "name"=>"Africa",
            "slug"=>"africa",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"America",
            "slug"=>"america",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"Asia",
            "slug"=>"asia",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"Australia",
            "slug"=>"australia",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"China",
            "slug"=>"china",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"Europe",
            "slug"=>"europe",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"India",
            "slug"=>"india",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"Middle East",
            "slug"=>"middle-east",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>1,
            "name"=>"United Kingdom",
            "slug"=>"united-kingdom",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);



        // Politics
        SubCategory::create([
            "category_id"=>2,
            "name"=>"Spring Revolution",
            "slug"=>"spring-revolution",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>2,
            "name"=>"Military Coup",
            "slug"=>"military-coup",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>2,
            "name"=>"What happening",
            "slug"=>"what-happening",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>2,
            "name"=>"Civil Wars",
            "slug"=>"civil-wars",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Business
        SubCategory::create([
            "category_id"=>3,
            "name"=>"Markets",
            "slug"=>"markets",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>3,
            "name"=>"Tech",
            "slug"=>"tech",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>3,
            "name"=>"Media",
            "slug"=>"media",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>3,
            "name"=>"Success",
            "slug"=>"success",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>3,
            "name"=>"Perspectives",
            "slug"=>"perspectives",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Health
        SubCategory::create([
            "category_id"=>4,
            "name"=>"Life",
            "slug"=>"life",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>4,
            "name"=>"Fitness",
            "slug"=>"fitness",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>4,
            "name"=>"Food",
            "slug"=>"food",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>4,
            "name"=>"Sleep",
            "slug"=>"sleep",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>4,
            "name"=>"Mediation",
            "slug"=>"mediation",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Entertainment
        SubCategory::create([
            "category_id"=>5,
            "name"=>"Celebrity",
            "slug"=>"celebrity",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>5,
            "name"=>"Movies",
            "slug"=>"movies",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>5,
            "name"=>"Television",
            "slug"=>"television",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Technology
        SubCategory::create([
            "category_id"=>6,
            "name"=>"Computer",
            "slug"=>"computer",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>6,
            "name"=>"Block Chain And Cryptocurrency",
            "slug"=>"block-chain-and-cryptocurrency",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>6,
            "name"=>"Networking",
            "slug"=>"networking",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>6,
            "name"=>"Developement",
            "slug"=>"developement",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Life Style
        SubCategory::create([
            "category_id"=>7,
            "name"=>"Arts",
            "slug"=>"arts",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>7,
            "name"=>"Design",
            "slug"=>"design",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>7,
            "name"=>"Fashion",
            "slug"=>"fashion",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>7,
            "name"=>"Architecture",
            "slug"=>"architecture",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>7,
            "name"=>"Luxury",
            "slug"=>"luxury",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>7,
            "name"=>"Beauty",
            "slug"=>"beauty",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Travel
        SubCategory::create([
            "category_id"=>8,
            "name"=>"Food and Drink",
            "slug"=>"food-and-drink",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>8,
            "name"=>"Stay",
            "slug"=>"stay",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>8,
            "name"=>"News",
            "slug"=>"news",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>8,
            "name"=>"Destinations",
            "slug"=>"destinations",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);

        // Sport
        SubCategory::create([
            "category_id"=>9,
            "name"=>"World Cup",
            "slug"=>"world-cup",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>9,
            "name"=>"Tennis",
            "slug"=>"tennis",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>9,
            "name"=>"Golf",
            "slug"=>"golf",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>9,
            "name"=>"Football",
            "slug"=>"football",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>9,
            "name"=>"Esports",
            "slug"=>"esports",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>9,
            "name"=>"Climbing",
            "slug"=>"climbing",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
        SubCategory::create([
            "category_id"=>9,
            "name"=>"Olympics",
            "slug"=>"olympics",
            "status_on_navbar"=>"show",
            "status_on_home"=>"hide"
        ]);
    }
}
