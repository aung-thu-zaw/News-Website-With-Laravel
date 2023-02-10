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
        // English
        TrendingVideo::factory()->create(
            [
                "video_id"=>"4jR9Rp4kH_s",
                "caption"=>"YouTube deletes Edubirdie essay cheating videos after BBC Trending investigation",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"ukpxlQ95j0U",
                "caption"=>"Scammers target BBC reporter with sextortion emails",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"OuEbdReyAnU",
                "caption"=>"Manspreading bleach' a Kremlin hoax? BBC Trending asks Anna Dovgalyuk",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"wb0DISwHMWc",
                "caption"=>"How to fake a trend on Twitter",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"zZ_-V1dhJnQ",
                "caption"=>"Hanif Bali: The anti-immigration politician... who's an immigrant ",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"EoHy-sNw_1M",
                "caption"=>"Meet Unclebantzz a Twitter user suspended by new anti-abuse rules",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"r_5eSiyhiMo",
                "caption"=>"YouTube child abuse reporting system 'flawed",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"wpjvE6son5s",
                "caption"=>"Inside Alexei Navalny's social media machine as he seeks to become Russia's president",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"eFMBliW4cpk",
                "caption"=>"The people battling online for Russia’s future",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"eFMBliW4cpk",
                "caption"=>"The people battling online for Russia’s future - BBC Trending",
            ]
        );



        // Myanmar
        TrendingVideo::factory()->create(
            [
                "video_id"=>"4jR9Rp4kH_s",
                "language_id"=>2,
                "caption"=>"BBC ခေတ်စားနေသည့် စုံစမ်းစစ်ဆေးမှုအပြီးတွင် YouTube သည် Edubirdie အက်ဆေးလှည့်စားသည့် ဗီဒီယိုများကို ဖျက်ပစ်သည်။",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"ukpxlQ95j0U",
                "language_id"=>2,
                "caption"=>"လိမ်လည်လှည့်ဖြားသူများသည် ဘီဘီစီသတင်းထောက်ကို လိင်ပိုင်းဆိုင်ရာ စော်ကားသည့်အီးမေးလ်များဖြင့် ပစ်မှတ်ထားကြသည်။",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"OuEbdReyAnU",
                "language_id"=>2,
                "caption"=>"လူပြန့်ပွားနေသော အရောင်ချွတ်ဆေးသည် ကရင်မလင်၏ လှည့်ဖြားမှုတစ်ခုလား။ BBC ခေတ်စားနေသော Anna Dovgalyuk ကို မေးသည်။",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"wb0DISwHMWc",
                "language_id"=>2,
                "caption"=>"Twitter မှာ trend တစ်ခုကို ဘယ်လို အတုလုပ်မလဲ။",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"zZ_-V1dhJnQ",
                "language_id"=>2,
                "caption"=>"Hanif Bali- လူဝင်မှုကြီးကြပ်ရေး ဆန့်ကျင်ရေး နိုင်ငံရေးသမား... ရွှေ့ပြောင်းနေထိုင်သူ",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"EoHy-sNw_1M",
                "language_id"=>2,
                "caption"=>"အလွဲသုံးစားမှု ဆန့်ကျင်ရေး စည်းမျဉ်းအသစ်များဖြင့် ဆိုင်းငံ့ထားသော Twitter အသုံးပြုသူ Unclebantzz နှင့် တွေ့ဆုံပါ။",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"r_5eSiyhiMo",
                "language_id"=>2,
                "caption"=>"YouTube တွင် ကလေးသူငယ်အလွဲသုံးစားပြုမှု အစီရင်ခံခြင်းစနစ် 'ချို့ယွင်းချက်'",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"wpjvE6son5s",
                "language_id"=>2,
                "caption"=>"ရုရှားသမ္မတဖြစ်ရန်ကြိုးစားနေစဉ် Alexei Navalny ၏လူမှုမီဒီယာစက်အတွင်းတွင်",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"eFMBliW4cpk",
                "language_id"=>2,
                "caption"=>"ရုရှား၏အနာဂတ်အတွက် အွန်လိုင်းတွင် တိုက်ပွဲဝင်နေသူများ",
            ]
        );
        TrendingVideo::factory()->create(
            [
                "video_id"=>"eFMBliW4cpk",
                "language_id"=>2,
                "caption"=>"ရုရှား၏အနာဂတ်အတွက် အွန်လိုင်းတွင် တိုက်ပွဲဝင်နေကြသူများ - BBC ခေတ်ရေစီးကြောင်း",
            ]
        );
    }
}
