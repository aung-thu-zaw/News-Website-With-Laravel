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
        // $newsPosts=NewsPost::factory(1000)->make();

        // $newsPosts->chunk(500)->each(function ($chunk) {
        //     NewsPost::insert($chunk->toArray());
        // });

        // DB::statement("update news_posts set created_at=now(),updated_at=now()");

        // English Language
        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Pope Francis to visit two fragile African nations",
            "slug"=>"pope-francis-to-visit-two-fragile-african-nations",
            "thumbnail"=>"africa-1.jpg",
            "visitors"=>20
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Myanmar coup: The doctors and nurses defying the military",
            "slug"=>"Myanmar-coup:-The-doctors-and-nurses-defying-the-military",
            "thumbnail"=>"revolution-10.webp"

        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Taylor Lautner makes rare comment about ex Taylor Swift that leaves his wife ‘deceased’",
            "slug"=>"Taylor-Lautner-makes-rare-comment-about-ex-Taylor-Swift-that-leaves-his-wife-‘deceased’",
            "thumbnail"=>"celebrity-1.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Scottish footballer scores sensational goal from inside his own half",
            "slug"=>"scottish-footballer-scores-sensational-goal-from-inside-his-own-half",
            "thumbnail"=>"football-1.jpg",
            "visitors"=>67
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Myanmar Rohingya violence is genocide, US says",
            "slug"=>"Myanmar-Rohingya-violence-is-genocide,-US-says",
            "thumbnail"=>"revolution-8.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"The deadly battles that tipped Myanmar into civil war",
            "slug"=>"The-deadly-battles-that-tipped-Myanmar-into-civil-war",
            "thumbnail"=>"revolution-9.webp",
            "visitors"=>46
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"In spite of strict cannabis laws, Hong Kong's first CBD cafe is open for business",
            "slug"=>"In-spite-of-strict-cannabis-laws,-Hong-Kong's-first-CBD-cafe-is-open-for-business",
            "thumbnail"=>"food-1.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"South Africa tourism in talks to sponsor Tottenham Hotspur amid energy crisis",
            "slug"=>"south-africa-tourism-in-talks-to-sponsor-Tottenham-Hotspur-amid-energy-crisis",
            "thumbnail"=>"africa-2.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Discovery of embalming workshop reveals how ancient Egyptians mummified the dead",
            "slug"=>"discovery-of-embalming-workshop-reveals-how-ancient-Egyptians-mummified-the-dead",
            "thumbnail"=>"africa-3.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Myanmar: Who are the rulers who have executed democracy campaigners?",
            "slug"=>"Myanmar:-Who-are-the-rulers-who-have-executed-democracy-campaigners?",
            "thumbnail"=>"revolution-7.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Six journalists detained over footage that shows South Sudan president seemingly wetting himself",
            "slug"=>"six-journalists-detained-over-footage-that-shows-South-Sudan-president-seemingly-wetting-himself",
            "thumbnail"=>"africa-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Gunmen abduct more than 100 in Nigerias Zamfara state",
            "slug"=>"gunmen-abduct-more-than-100-in-nigerias-zamfara-state",
            "thumbnail"=>"africa-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Russian linked to Wagner badly hurt in assassination attempt in Central African Republic",
            "slug"=>"russian-linked-to-wagner-badly-hurt-in-assassination-attempt-in-central-african-republic",
            "thumbnail"=>"africa-6.jpg",
            "visitors"=>4
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Floods kill at least 120 in Kinshasa",
            "slug"=>"floods-kill-at-least-120-in-Kinshasa",
            "thumbnail"=>"africa-7.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"Landmark national security trial of Hong Kong democracy activists begins. Heres what you need to know",
            "slug"=>"landmark-national-security-trial-of-Hong-Kong-democracy-activists-begins.-heres-what-you-need-to-know",
            "thumbnail"=>"asia-1.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"Indian guru Asaram given life sentence in second rape case",
            "slug"=>"indian-guru-Asaram-given-life-sentence-in-second-rape-case",
            "thumbnail"=>"asia-2.jpg",
            "visitors"=>55
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"Chinese province drops restrictions on unmarried people having children in bid to halt plummeting birth rate",
            "slug"=>"chinese-province-drops-restrictions-on-unmarried-people-having-children-in-bid-to-halt-plummeting-birth-rate",
            "thumbnail"=>"asia-3.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"Eight confirmed dead after ship capsizes near Japan, nine still missing",
            "slug"=>"eight-confirmed-dead-after-ship-capsizes-near-Japan,-nine-still-missing",
            "thumbnail"=>"asia-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"Cargo ship capsizes off Japans coast with 22 aboard",
            "slug"=>"cargo-ship-capsizes-off-Japans-coast-with-22 aboard",
            "thumbnail"=>"asia-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"They eat ice cream and read Harry Potter, but these North Korean YouTubers arent what they seem",
            "slug"=>"they-eat-ice-cream-and-read-Harry-Potter,-but-these-North-Korean-YouTubers-arent-what-they-seem",
            "thumbnail"=>"asia-6.jpg",
            "visitors"=>53
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"The disappearance of a teen gripped China. The discovery of his body raised more questions",
            "slug"=>"the-disappearance-of-a-teen-gripped-China.-The-discovery-of-his-body-raised-more-questions",
            "thumbnail"=>"asia-7.jpg",
            "visitors"=>1
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"Three dead as torrential rain causes disastrous flooding in New Zealand",
            "slug"=>"three-dead-as-torrential-rain-causes-disastrous-flooding-in-New-Zealand",
            "thumbnail"=>"asia-8.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>3,
            "title"=>"In Japan, pet fish playing Nintendo Switch run up bill on owners credit card",
            "slug"=>"in-japan,-pet-fish-playing-nintendo-switch-run-up-bill-on-owners-credit-card",
            "thumbnail"=>"asia-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"You know why Jurgen Klopp refuses to answer journalists question",
            "slug"=>"you-know-why-Jurgen-Klopp-refuses-to-answer-journalists-question",
            "thumbnail"=>"football-2.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Myanmar: Air strikes have become a deadly new tactic in the civil war",
            "slug"=>"Myanmar-Air-strikes-have-become-a-deadly-new-tactic-in-the-civil-war",
            "thumbnail"=>"revolution-1.webp",
            "visitors"=>21
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Global firms help Myanmar's military make weapons, says report",
            "slug"=>"Global-firms-help-Myanmar's-military-make-weapons,-says-report",
            "thumbnail"=>"revolution-2.webp",
            "visitors"=>14
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"The morning after: What people around the world eat and drink to beat a hangover",
            "slug"=>"The-morning-after:-What-people-around-the-world-eat-and-drink-to-beat-a-hangover",
            "thumbnail"=>"food-2.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Myanmar crisis: 50 killed in air raid on Kachin rebels, reports say",
            "slug"=>"Myanmar-crisis:-50-killed-in-air-raid-on-Kachin-rebels,-reports-say",
            "thumbnail"=>"revolution-3.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Vicky Bowman: UK former ambassador jailed in Myanmar",
            "slug"=>"Vicky-Bowman:-UK-former-ambassador-jailed-in-Myanmar",
            "thumbnail"=>"revolution-4.webp",
            "visitors"=>77
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"7 countries, 7 traditional Christmas feasts",
            "slug"=>"7-countries,-7-traditional-Christmas-feasts",
            "thumbnail"=>"food-3.jpg",
            "visitors"=>21
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"South African President Ramaphosa will not be impeached over cash-in sofa scandal",
            "slug"=>"south-african-president-ramaphosa-will-not-be-impeached-over-cash-in-sofa-scandal",
            "thumbnail"=>"africa-8.jpg",
            "visitors"=>12
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"How KFC became a Christmas tradition in Japan",
            "slug"=>"How-KFC-became-a-Christmas-tradition-in-Japan",
            "thumbnail"=>"food-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"Frozen food named 'dish of the year' in Japan",
            "slug"=>"Frozen-food-named-'dish-of-the-year'-in-Japan",
            "thumbnail"=>"food-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"The roasted pigeon dish that may have changed the course of modern Chinese history",
            "slug"=>"The-roasted-pigeon-dish-that-may-have-changed-the-course-of-modern-Chinese-history",
            "thumbnail"=>"food-6.jpg",
            "visitors"=>45
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"23 of the world's best sandwiches",
            "slug"=>"23-of-the-world's-best-sandwiches",
            "thumbnail"=>"food-7.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"Best Chinese food: 32 must-try dishes",
            "slug"=>"Best-Chinese-food:-32-must-try-dishes",
            "thumbnail"=>"food-8.jpg",
            "visitors"=>9
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"World's best spicy foods: 20 dishes to try",
            "slug"=>"World's-best-spicy-foods:-20-dishes-to-try",
            "thumbnail"=>"food-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>21,
            "title"=>"23 delicious reasons to try Turkish food",
            "slug"=>"23-delicious-reasons-to-try-Turkish-food",
            "thumbnail"=>"food-10.jpg",
            "visitors"=>23
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"US Lawmakers Question Meta on Sensitive Facebook User Data Access Granted to Chinese, Russian Developers",
            "slug"=>"US-Lawmakers-Question-Meta-on-Sensitive-Facebook-User-Data-Access-Granted-to-Chinese,-Russian-Developers",
            "thumbnail"=>"tech-1.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Three people found sitting on ships rudder survived an 11-day voyage from Nigeria",
            "slug"=>"three-people-found-sitting-on-ships-rudder-survived-an-11-day-voyage-from-nigeria",
            "thumbnail"=>"africa-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"iPhone 14 Series Gets Discounts of Up to Rs. 12,195 During Valentine Day Sale: Check Offers",
            "slug"=>"iPhone-14-Series-Gets-Discounts-of-Up-to-Rs-12,195-During-Valentine-Day-Sale-Check-Offers",
            "thumbnail"=>"tech-2.webp",
            "visitors"=>98
        ]);


        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"Bitcoin, ETH Opened Today with Some Gains, Altcoins See Small Losses",
            "slug"=>"Bitcoin-ETH-Opened-Today-with-Some-Gains,-Altcoins-See-Small-Losses",
            "thumbnail"=>"tech-3.webp"
        ]);


        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"Call of Duty Modern Warfare Crossed Billion in Sales Within 10 Days of Launch, Says Activision",
            "slug"=>"Call-of-Duty-Modern-Warfare-Crossed-Billion-in-Sales-Within-10-Days-of-Launch-Says-Activision",
           "thumbnail"=>"tech-4.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Rohingya: ‘Kill us, but don’t deport us to Myanmar’",
            "slug"=>"Rohingya:-‘Kill-us,-but-don’t-deport-us-to-Myanmar’",
            "thumbnail"=>"revolution-5.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"Google Announces ChatGPT Rival Bard, Releases AI Service to Early Testers",
            "slug"=>"Google-Announces-ChatGPT-Rival-Bard-Releases-AI-Service-to-Early-Testers",
            "thumbnail"=>"tech-5.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"Vedanta's Semiconductor Unit in Gujarat to Be Headed by David Reed; to Manufacture Chips for Phones, Laptops",
            "slug"=>"Vedanta's-Semiconductor-Unit-in-Gujarat-to-Be-Headed-by-David-Reed-to-Manufacture-Chips-for-Phones-Laptops",
           "thumbnail"=>"tech-6.jpeg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"EU Lawmakers Plan to Finalise Draft AI Rules by March Amid Concerns About ChatGPT",
            "slug"=>"EU-Lawmakers-Plan-to-Finalise-Draft-AI-Rules-by-March-Amid-Concerns-About-ChatGPT",
            "thumbnail"=>"tech-7.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Lionel Messi scores to secure victory for Paris Saint Germain",
            "slug"=>"lionel-messi-scores-to-secure-victory-for-paris-saint-germain",
            "thumbnail"=>"football-3.jpg",
            "visitors"=>4
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"Elon Musk Found Not Liable in 2018 Tweets Regarding Tesla’s Share Price",
            "slug"=>"Elon-Musk-Found-Not-Liable-in-2018-Tweets-Regarding-Tesla-Share-Price",
            "thumbnail"=>"tech-8.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Britney Spears asks fans to respect her privacy after ‘prank phone calls’ prompted wellness check",
            "slug"=>"Britney-Spears-asks-fans-to-respect-her-privacy-after-‘prank-phone-calls’-prompted-wellness-check",
            "thumbnail"=>"celebrity-2.jpg",
            "visitors"=>6
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Priscilla Presley eulogizes daughter Lisa Marie Presley at Graceland with poem written by granddaughter",
            "slug"=>"Priscilla-Presley-eulogizes-daughter-Lisa-Marie-Presley-at-Graceland-with-poem-written-by-granddaughter",
            "thumbnail"=>"celebrity-3.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"50 Government Websites Hacked, 8 Data Breaches in 2022: IT Minister Ashwini Vaishnaw",
            "slug"=>"50-Government-Websites-Hacked,-8-Data-Breaches-in-2022-IT-Minister-Ashwini-Vaishnaw",
            "thumbnail"=>"tech-9.webp",
            "visitors"=>58
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"James Cameron revisits the moment he calls ‘cringeworthy’ in his 1998 Oscars speech",
            "slug"=>"James-Cameron-revisits-the-moment-he-calls-‘cringeworthy’-in-his-1998-Oscars-speech",
            "thumbnail"=>"celebrity-4.jpg",
            "visitors"=>77
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Celebrity Jeopardy’ crowns new champion",
            "slug"=>"Celebrity-Jeopardy’-crowns-new-champion",
            "thumbnail"=>"celebrity-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Borussia Dortmunds Sebastien Haller scores first goal after return from cancer treatment",
            "slug"=>"borussia-dortmunds-Ssebastien-haller-scores-first-goal-after-return-from-cancer-treatment",
            "thumbnail"=>"football-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>1,
            "title"=>"Landslide kills at least 14 attending funeral in Cameroon capital",
            "slug"=>"landslide-kills-at-least-14-attending-funeral-in-cameroon-capital",
            "thumbnail"=>"africa-10.jpg",
            "visitors"=>21
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Cristiano Ronaldo scores his first goal for new club Al Nassr",
            "slug"=>"cristiano-ronaldo-scores-his-first-goal-for-new-club-al-nassr",
            "thumbnail"=>"football-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Crown Prosecution Service drops attempted rape charges against Manchester Uniteds Mason Greenwood",
            "slug"=>"crown-prosecution-service-drops-attempted-rape-charges-against-manchester-uniteds-mason-greenwood",
            "thumbnail"=>"football-6.jpg",
            "visitors"=>43
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"From ants to bats, Ozzy Osbourne’s crazy life on the road",
            "slug"=>"From-ants-to-bats,-Ozzy-Osbourne’s-crazy-life-on-the-road",
            "thumbnail"=>"life-6.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Portia de Rossi surprises wife Ellen DeGeneres with vow renewal ceremony",
            "slug"=>"Portia-de-Rossi-surprises-wife-Ellen-DeGeneres-with-vow-renewal-ceremony",
            "thumbnail"=>"life-7.jpg",
            "visitors"=>33
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Barrett Strong, Motown singer and songwriter, dead at 81",
            "slug"=>"Barrett-Strong,-Motown-singer-and-songwriter,-dead-at-81",
            "thumbnail"=>"life-8.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Kylian Mbappé to miss three weeks after suffering hamstring injury in PSG win where he missed two penalties",
            "slug"=>"kylian-mbappé-to-miss-three-weeks-after-suffering-hamstring-injury-in-PSG-win-where-he-missed-two-penalties",
            "thumbnail"=>"football-7.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Vinícius Jr. scores against Atlético Madrid after effigy of Black soccer star hanged from bridge in Madrid",
            "slug"=>"vinícius-jr.-scores-against-atlético-madrid-after-effigy-of-black-soccer-star-hanged-from-bridge-in-madrid",
            "thumbnail"=>"football-8.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Demi Lovato poster banned by advertising regulator for being offensive to Christians",
            "slug"=>"Demi-Lovato-poster-banned-by-advertising-regulator-for-being-offensive-to-Christians",
            "thumbnail"=>"celebrity-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Brazilian footballer Dani Alves detained in Barcelona in relation to alleged sexual assault",
            "slug"=>"brazilian-footballer-dani-alves-detained-in-barcelona-in-relation-to-alleged-sexual-assault",
            "thumbnail"=>"football-9.jpg",
            "visitors"=>8
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>15,
            "title"=>"Intel Fears Another EU Antitrust Fine Despite Winning Its Court Fight Last Year",
            "slug"=>"Intel-Fears-Another-EU-Antitrust-Fine-Despite-Winning-Its-Court-Fight-Last-Year",
            "thumbnail"=>"tech-10.jpeg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>24,
            "title"=>"Adam Rich, ‘Eight Is Enough’ actor, dead at 54",
            "slug"=>"Adam-Rich,-‘Eight-Is-Enough’-actor,-dead-at-54",
            "thumbnail"=>"celebrity-10.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>44,
            "title"=>"Lionel Messi and Cristiano Ronaldo both score in thrilling exhibition match in Saudi Arabia",
            "slug"=>"lionel-messi-and-cristiano-ronaldo-both-score-in-thrilling-exhibition-match-in-saudi-arabia",
            "thumbnail"=>"football-10.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>10,
            "title"=>"Executions spiked in Iran in Saudi Arabia in 2021 - Amnesty
            Published",
            "slug"=>"Executions-spiked-in-Iran-in-Saudi-Arabia-in-2021-Amnesty-Published",
            "thumbnail"=>"revolution-6.webp"
        ]);



        // Myanmar Language
        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"ပုပ်ရဟန်းမင်းကြီး ဖရန်စစ်ဟာ နုနယ်သေးတဲ့ အာဖရိကနိုင်ငံနှစ်ခုကို သွားရောက်လည်ပတ်မှာ ဖြစ်ပါတယ်။",
            "slug"=>"ပုပ်ရဟန်းမင်းကြီး ဖရန်စစ်ဟာ နုနယ်သေးတဲ့ အာဖရိကနိုင်ငံနှစ်ခုကို သွားရောက်လည်ပတ်မှာ ဖြစ်ပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-1.jpg",
            "visitors"=>20
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"မြန်မာအာဏာသိမ်းမှု- ဆရာဝန်များနှင့် သူနာပြုများသည် စစ်တပ်ကို ဖီဆန်သည်။",
            "slug"=>"မြန်မာအာဏာသိမ်းမှု- ဆရာဝန်များနှင့် သူနာပြုများသည် စစ်တပ်ကို ဖီဆန်သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-10.webp"

        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"Taylor Lautner က သူ့ဇနီးကို ကွယ်လွန်သွားပြီဖြစ်တဲ့ Taylor Swift နဲ့ ပတ်သက်ပြီး ရှားရှားပါးပါး မှတ်ချက်ပေးခဲ့ပါတယ်။",
            "slug"=>"Taylor Lautner က သူ့ဇနီးကို ကွယ်လွန်သွားပြီဖြစ်တဲ့ Taylor Swift နဲ့ ပတ်သက်ပြီး ရှားရှားပါးပါး မှတ်ချက်ပေးခဲ့ပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"celebrity-1.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"စကော့တလန်ဘောလုံးသမားသည် ၎င်း၏ကိုယ်ပိုင်တစ်ဝက်အတွင်းမှ စိတ်လှုပ်ရှားဖွယ်ရာဂိုးကို သွင်းယူနိုင်ခဲ့သည်။",
            "slug"=>"စကော့တလန်ဘောလုံးသမားသည် ၎င်း၏ကိုယ်ပိုင်တစ်ဝက်အတွင်းမှ စိတ်လှုပ်ရှားဖွယ်ရာဂိုးကို သွင်းယူနိုင်ခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-1.jpg",
            "visitors"=>67
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"ရိုဟင်ဂျာအကြမ်းဖက်မှုဟာ လူမျိုးတုံးသတ်ဖြတ်မှုဖြစ်တယ်လို့ အမေရိကန်က ပြောပါတယ်။",
            "slug"=>"ရိုဟင်ဂျာအကြမ်းဖက်မှုဟာ လူမျိုးတုံးသတ်ဖြတ်မှုဖြစ်တယ်လို့ အမေရိကန်က ပြောပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-8.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"အသေအပျောက်များသော တိုက်ပွဲများသည် မြန်မာနိုင်ငံကို ပြည်တွင်းစစ်အဖြစ်သို့ ပြောင်းလဲစေခဲ့သည်။",
            "slug"=>"အသေအပျောက်များသော တိုက်ပွဲများသည် မြန်မာနိုင်ငံကို ပြည်တွင်းစစ်အဖြစ်သို့ ပြောင်းလဲစေခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-9.webp",
            "visitors"=>46
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"တင်းကျပ်သောဆေးခြောက်ဥပဒေများကြားမှ၊ ဟောင်ကောင်၏ပထမဆုံး CBD ကော်ဖီဆိုင်သည် စီးပွားရေးအတွက်ဖွင့်ထားသည်။",
            "slug"=>"တင်းကျပ်သောဆေးခြောက်ဥပဒေများကြားမှ၊ ဟောင်ကောင်၏ပထမဆုံး CBD ကော်ဖီဆိုင်သည် စီးပွားရေးအတွက်ဖွင့်ထားသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-1.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"စွမ်းအင်အကျပ်အတည်းကြားတွင် တော့တင်ဟမ်ဟော့စပါးကို စပွန်ဆာပေးရန် တောင်အာဖရိကခရီးသွားလုပ်ငန်း၌ ဆွေးနွေးနေသည်။",
            "slug"=>"စွမ်းအင်အကျပ်အတည်းကြားတွင် တော့တင်ဟမ်ဟော့စပါးကို စပွန်ဆာပေးရန် တောင်အာဖရိကခရီးသွားလုပ်ငန်း၌ ဆွေးနွေးနေသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-2.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"ရှေးခေတ်အီဂျစ်လူမျိုးများသည် လူသေများကို သွေ့ခြောက်အောင်ပြုလုပ်သည့် အလုပ်ရုံဆွေးနွေးပွဲကို ရှာဖွေတွေ့ရှိမှုအား ပြသသည်။",
            "slug"=>"ရှေးခေတ်အီဂျစ်လူမျိုးများသည် လူသေများကို သွေ့ခြောက်အောင်ပြုလုပ်သည့် အလုပ်ရုံဆွေးနွေးပွဲကို ရှာဖွေတွေ့ရှိမှုအား ပြသသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-3.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"မြန်မာ- ဒီမိုကရေစီရေး လှုပ်ရှားသူတွေကို ကွပ်မျက်ခဲ့တဲ့ အုပ်စိုးရှင်တွေက ဘယ်သူတွေလဲ။",
            "slug"=>"မြန်မာ- ဒီမိုကရေစီရေး လှုပ်ရှားသူတွေကို ကွပ်မျက်ခဲ့တဲ့ အုပ်စိုးရှင်တွေက ဘယ်သူတွေလဲ။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-7.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"တောင်ဆူဒန်သမ္မတဟာ သူ့ကိုယ်သူ ရေစိုနေပုံပေါ်တဲ့ ဗီဒီယိုဖိုင်ကြောင့် သတင်းထောက်ခြောက်ဦးကို ဖမ်းဆီးထိန်းသိမ်းခံခဲ့ရပါတယ်။",
            "slug"=>"တောင်ဆူဒန်သမ္မတဟာ သူ့ကိုယ်သူ ရေစိုနေပုံပေါ်တဲ့ ဗီဒီယိုဖိုင်ကြောင့် သတင်းထောက်ခြောက်ဦးကို ဖမ်းဆီးထိန်းသိမ်းခံခဲ့ရပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"နိုင်ဂျီးရီးယားနိုင်ငံ ဇမ်ဖာရာပြည်နယ်တွင် သေနတ်သမားများက လူ ၁၀၀ ကျော်ကို ပြန်ပေးဆွဲခဲ့သည်။",
            "slug"=>"နိုင်ဂျီးရီးယားနိုင်ငံ ဇမ်ဖာရာပြည်နယ်တွင် သေနတ်သမားများက လူ ၁၀၀ ကျော်ကို ပြန်ပေးဆွဲခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"ဗဟိုအာဖရိကသမ္မတနိုင်ငံ၌ လုပ်ကြံသတ်ဖြတ်ရန် ကြိုးပမ်းမှုတွင် ရုရှားမှ Wagner နှင့် ဆက်နွှယ်နေပါသည်။",
            "slug"=>"ဗဟိုအာဖရိကသမ္မတနိုင်ငံ၌ လုပ်ကြံသတ်ဖြတ်ရန် ကြိုးပမ်းမှုတွင် ရုရှားမှ Wagner နှင့် ဆက်နွှယ်နေပါသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-6.jpg",
            "visitors"=>4
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"Kinshasa တွင် ရေကြီးမှုကြောင့် အနည်းဆုံး လူ ၁၂၀ သေဆုံးခဲ့သည်။",
            "slug"=>"Kinshasa တွင် ရေကြီးမှုကြောင့် အနည်းဆုံး လူ ၁၂၀ သေဆုံးခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-7.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"ဟောင်ကောင် ဒီမိုကရေစီရေး လှုပ်ရှားသူတွေရဲ့ အထင်ကရ အမျိုးသား လုံခြုံရေး စစ်ဆေးမှု စတင်ပါပြီ။ ဤသည်မှာ သင်သိလိုသည်များ",
            "slug"=>"ဟောင်ကောင် ဒီမိုကရေစီရေး လှုပ်ရှားသူတွေရဲ့ အထင်ကရ အမျိုးသား လုံခြုံရေး စစ်ဆေးမှု စတင်ပါပြီ။ ဤသည်မှာ သင်သိလိုသည်များ",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-1.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"အိန္ဒိယဂုရု Asaram သည် ဒုတိယအကြိမ် မုဒိမ်းကျင့်မှုအတွက် ထောင်ဒဏ် တစ်သက်တစ်ကျွန်း ချမှတ်ခဲ့သည်။",
            "slug"=>"အိန္ဒိယဂုရု Asaram သည် ဒုတိယအကြိမ် မုဒိမ်းကျင့်မှုအတွက် ထောင်ဒဏ် တစ်သက်တစ်ကျွန်း ချမှတ်ခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-2.jpg",
            "visitors"=>55
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"တရုတ်နိုင်ငံတွင် ကလေးမွေးဖွားနှုန်း ကျဆင်းနေခြင်းကို ရပ်တန့်ရန် လက်မထပ်ရသေးသော လူများကို ကန့်သတ်ချက်များ လျှော့ချလိုက်သည်။",
            "slug"=>"တရုတ်နိုင်ငံတွင် ကလေးမွေးဖွားနှုန်း ကျဆင်းနေခြင်းကို ရပ်တန့်ရန် လက်မထပ်ရသေးသော လူများကို ကန့်သတ်ချက်များ လျှော့ချလိုက်သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-3.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"ဂျပန်နိုင်ငံအနီး သင်္ဘော တိမ်းမှောက်မှုကြောင့် ရှစ်ဦး သေဆုံးခဲ့ပြီး ကိုးဦး ပျောက်ဆုံးနေဆဲဖြစ်သည်။",
            "slug"=>"ဂျပန်နိုင်ငံအနီး သင်္ဘော တိမ်းမှောက်မှုကြောင့် ရှစ်ဦး သေဆုံးခဲ့ပြီး ကိုးဦး ပျောက်ဆုံးနေဆဲဖြစ်သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"ကုန်တင်သင်္ဘောတစ်စင်း လိုက်ပါလာသူ ၂၂ ဦးနှင့်အတူ ဂျပန်ကမ်းလွန်တွင် တိမ်းမှောက်ခဲ့ကြောင်း သိရသည်။",
            "slug"=>"ကုန်တင်သင်္ဘောတစ်စင်း လိုက်ပါလာသူ ၂၂ ဦးနှင့်အတူ ဂျပန်ကမ်းလွန်တွင် တိမ်းမှောက်ခဲ့ကြောင်း သိရသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"သူတို့က ရေခဲမုန့်စားပြီး Harry Potter တွေဖတ်ကြပေမယ့် ဒီ မြောက်ကိုရီးယား YouTubers တွေက သူတို့ပုံမပေါက်ဘူး။",
            "slug"=>"သူတို့က ရေခဲမုန့်စားပြီး Harry Potter တွေဖတ်ကြပေမယ့် ဒီ မြောက်ကိုရီးယား YouTubers တွေက သူတို့ပုံမပေါက်ဘူး။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-6.jpg",
            "visitors"=>53
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"တရုတ်နိုင်ငံတွင် ဆယ်ကျော်သက်တစ်ဦး ပျောက်ဆုံးသွားခြင်း သူ့အလောင်းကို ရှာဖွေတွေ့ရှိမှုက မေးခွန်းထုတ်စရာတွေ ပိုများလာသည်။",
            "slug"=>"တရုတ်နိုင်ငံတွင် ဆယ်ကျော်သက်တစ်ဦး ပျောက်ဆုံးသွားခြင်း သူ့အလောင်းကို ရှာဖွေတွေ့ရှိမှုက မေးခွန်းထုတ်စရာတွေ ပိုများလာသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-7.jpg",
            "visitors"=>1
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"နယူးဇီလန်တွင် မိုးသည်းထန်စွာရွာသွန်းမှုကြောင့် ရေကြီးရေလျှံမှုများကြောင့် လူသုံးဦးသေဆုံးခဲ့သည်။",
            "slug"=>"နယူးဇီလန်တွင် မိုးသည်းထန်စွာရွာသွန်းမှုကြောင့် ရေကြီးရေလျှံမှုများကြောင့် လူသုံးဦးသေဆုံးခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-8.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>50,
            "language_id"=>2,
            "title"=>"ဂျပန်တွင် Nintendo Switch ကစားသော အိမ်မွေးငါးများသည် ပိုင်ရှင်များ၏ ခရက်ဒစ်ကတ်တွင် ငွေတောင်းခံလွှာများ တက်လာပါသည်။",
            "slug"=>"ဂျပန်တွင် Nintendo Switch ကစားသော အိမ်မွေးငါးများသည် ပိုင်ရှင်များ၏ ခရက်ဒစ်ကတ်တွင် ငွေတောင်းခံလွှာများ တက်လာပါသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"asia-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"ဂျာနယ်လစ်တွေရဲ့မေးခွန်းကို Jurgen Klopp က ဘာကြောင့် ငြင်းခဲ့တာလဲ သိလား။",
            "slug"=>"ဂျာနယ်လစ်တွေရဲ့မေးခွန်းကို Jurgen Klopp က ဘာကြောင့် ငြင်းခဲ့တာလဲ သိလား။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-2.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"မြန်မာ- လေကြောင်းတိုက်ခိုက်မှုများသည် ပြည်တွင်းစစ်တွင် သေစေလောက်သည့် နည်းဗျူဟာအသစ် ဖြစ်လာသည်။",
            "slug"=>"မြန်မာ- လေကြောင်းတိုက်ခိုက်မှုများသည် ပြည်တွင်းစစ်တွင် သေစေလောက်သည့် နည်းဗျူဟာအသစ် ဖြစ်လာသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-1.webp",
            "visitors"=>21
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"ကမ္ဘာလုံးဆိုင်ရာ ကုမ္ပဏီများကလည်း မြန်မာ့တပ်မတော်ကို လက်နက်များဖန်တီးရာတွင် ကူညီပေးနေသည်ဟု အစီရင်ခံစာတွင် ဖော်ပြထားသည်။",
            "slug"=>"ကမ္ဘာလုံးဆိုင်ရာ ကုမ္ပဏီများကလည်း မြန်မာ့တပ်မတော်ကို လက်နက်များဖန်တီးရာတွင် ကူညီပေးနေသည်ဟု အစီရင်ခံစာတွင် ဖော်ပြထားသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-2.webp",
            "visitors"=>14
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"နံနက်ခင်း- အရက်နာကျခြင်းကို တိုက်ဖျက်ရန် ကမ္ဘာတစ်ဝှမ်းရှိ လူများ စားသောက်သည့်အရာ",
            "slug"=>"နံနက်ခင်း- အရက်နာကျခြင်းကို တိုက်ဖျက်ရန် ကမ္ဘာတစ်ဝှမ်းရှိ လူများ စားသောက်သည့်အရာ",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-2.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"မြန်မာ အကျပ်အတည်း - ကချင် သူပုန်များ လေကြောင်း စီးနင်း တိုက်ခိုက်မှုကြောင့် ၅၀ ဦး သေဆုံးခဲ့ကြောင်း သတင်းများက ဆိုသည်။",
            "slug"=>"မြန်မာ အကျပ်အတည်း - ကချင် သူပုန်များ လေကြောင်း စီးနင်း တိုက်ခိုက်မှုကြောင့် ၅၀ ဦး သေဆုံးခဲ့ကြောင်း သတင်းများက ဆိုသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-3.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"Vicky Bowman - မြန်မာနိုင်ငံရှိ ဗြိတိန်သံအမတ်ဟောင်း",
            "slug"=>"Vicky Bowman - မြန်မာနိုင်ငံရှိ ဗြိတိန်သံအမတ်ဟောင်း",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-4.webp",
            "visitors"=>77
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"နိုင်ငံ ၇ နိုင်ငံ၊ ရိုးရာခရစ္စမတ်ပွဲတော် ၇ ခု",
            "slug"=>"နိုင်ငံ ၇ နိုင်ငံ၊ ရိုးရာခရစ္စမတ်ပွဲတော် ၇ ခု",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-3.jpg",
            "visitors"=>21
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"တောင်အာဖရိကသမ္မတ Ramaphosa သည် ဆိုဖာအတွင်း ငွေကြေးအရှုပ်တော်ပုံကြောင့် စွပ်စွဲပြစ်တင်ခြင်းခံရမည်မဟုတ်ပေ။",
            "slug"=>"တောင်အာဖရိကသမ္မတ Ramaphosa သည် ဆိုဖာအတွင်း ငွေကြေးအရှုပ်တော်ပုံကြောင့် စွပ်စွဲပြစ်တင်ခြင်းခံရမည်မဟုတ်ပေ။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-8.jpg",
            "visitors"=>12
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"KFC သည် ဂျပန်နိုင်ငံတွင် ခရစ္စမတ် ဓလေ့တစ်ခု ဖြစ်လာပုံ",
            "slug"=>"KFC သည် ဂျပန်နိုင်ငံတွင် ခရစ္စမတ် ဓလေ့တစ်ခု ဖြစ်လာပုံ",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"ဂျပန်နိုင်ငံတွင် 'တစ်နှစ်တာအကောင်းဆုံးဟင်း' ဟု အမည်ပေးထားသည့် အေးခဲအစားအစာ",
            "slug"=>"ဂျပန်နိုင်ငံတွင် 'တစ်နှစ်တာအကောင်းဆုံးဟင်း' ဟု အမည်ပေးထားသည့် အေးခဲအစားအစာ",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"ခေတ်သစ်တရုတ်သမိုင်းလမ်းကြောင်းကို ပြောင်းလဲစေမည့် ခိုကင်ဟင်းလျာ",
            "slug"=>"ခေတ်သစ်တရုတ်သမိုင်းလမ်းကြောင်းကို ပြောင်းလဲစေမည့် ခိုကင်ဟင်းလျာ",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-6.jpg",
            "visitors"=>45
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"ကမ္ဘာ့အကောင်းဆုံး အသားညှပ်ပေါင်မုန့် ၂၃ ခု",
            "slug"=>"ကမ္ဘာ့အကောင်းဆုံး အသားညှပ်ပေါင်မုန့် ၂၃ ခု",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-7.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"အကောင်းဆုံး တရုတ်အစားအစာ- စမ်းသုံးသင့်တဲ့ ဟင်းပွဲ ၃၂ မျိုး",
            "slug"=>"အကောင်းဆုံး တရုတ်အစားအစာ- စမ်းသုံးသင့်တဲ့ ဟင်းပွဲ ၃၂ မျိုး",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-8.jpg",
            "visitors"=>9
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"ကမ္ဘာ့အကောင်းဆုံး အစပ်အစားအစာများ- စမ်းကြည့်ရန် ဟင်းပွဲ ၂၀",
            "slug"=>"ကမ္ဘာ့အကောင်းဆုံး အစပ်အစားအစာများ- စမ်းကြည့်ရန် ဟင်းပွဲ ၂၀",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>68,
            "language_id"=>2,
            "title"=>"တူရကီအစားအစာကို မြည်းစမ်းကြည့်ရန် အရသာရှိသော အကြောင်းရင်း ၂၃ ခု",
            "slug"=>"တူရကီအစားအစာကို မြည်းစမ်းကြည့်ရန် အရသာရှိသော အကြောင်းရင်း ၂၃ ခု",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"food-10.jpg",
            "visitors"=>23
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"တရုတ်၊ ရုရှား developer များထံ ပေးအပ်ထားသည့် အရေးကြီးသော Facebook အသုံးပြုသူဒေတာ ဝင်ရောက်ခွင့်ဆိုင်ရာ အမေရိကန်လွှတ်တော်ကိုယ်စားလှယ်များ၏ မေးခွန်း",
            "slug"=>"တရုတ်၊ ရုရှား developer များထံ ပေးအပ်ထားသည့် အရေးကြီးသော Facebook အသုံးပြုသူဒေတာ ဝင်ရောက်ခွင့်ဆိုင်ရာ အမေရိကန်လွှတ်တော်ကိုယ်စားလှယ်များ၏ မေးခွန်း",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-1.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"နိုင်ဂျီးရီးယားနိုင်ငံမှ ၁၁ ရက်ကြာခရီးတွင် သင်္ဘောများပေါ်တွင် ထိုင်နေသည့် လူသုံးဦးကို တွေ့ရှိခဲ့သည်။",
            "slug"=>"နိုင်ဂျီးရီးယားနိုင်ငံမှ ၁၁ ရက်ကြာခရီးတွင် သင်္ဘောများပေါ်တွင် ထိုင်နေသည့် လူသုံးဦးကို တွေ့ရှိခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"iPhone 14 Series များသည် Rs အထိ လျှော့စျေးများ ရရှိမည်ဖြစ်သည်။ Valentine Day ရောင်းချမှုအတွင်း 12,195- ကမ်းလှမ်းချက်များကို စစ်ဆေးပါ။",
            "slug"=>"iPhone 14 Series များသည် Rs အထိ လျှော့စျေးများ ရရှိမည်ဖြစ်သည်။ Valentine Day ရောင်းချမှုအတွင်း 12,195- ကမ်းလှမ်းချက်များကို စစ်ဆေးပါ။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-2.webp",
            "visitors"=>98
        ]);


        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"Bitcoin, ETH သည် အချို့သော အမြတ်များဖြင့် ယနေ့ဖွင့်ခဲ့ပြီး Altcoins သည် သေးငယ်သော ဆုံးရှုံးမှုများကို ကြည့်ပါ။",
            "slug"=>"Bitcoin, ETH သည် အချို့သော အမြတ်များဖြင့် ယနေ့ဖွင့်ခဲ့ပြီး Altcoins သည် သေးငယ်သော ဆုံးရှုံးမှုများကို ကြည့်ပါ။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-3.webp"
        ]);


        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"Call of Duty Modern Warfare စတင်ပြီး 10 ရက်အတွင်း ရောင်းအား ဘီလျံနဲ့ချီပြီး ရောင်းချခဲ့တယ်လို့ Activision က ပြောကြားခဲ့ပါတယ်။",
            "slug"=>"Call of Duty Modern Warfare စတင်ပြီး 10 ရက်အတွင်း ရောင်းအား ဘီလျံနဲ့ချီပြီး ရောင်းချခဲ့တယ်လို့ Activision က ပြောကြားခဲ့ပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-4.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"ရိုဟင်ဂျာ- 'ငါတို့ကို သတ်လိုက်ပါ၊ ငါတို့ကို မြန်မာနိုင်ငံကို မနှင်ထုတ်နဲ့'",
            "slug"=>"ရိုဟင်ဂျာ- 'ငါတို့ကို သတ်လိုက်ပါ၊ ငါတို့ကို မြန်မာနိုင်ငံကို မနှင်ထုတ်နဲ့'",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-5.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"Google သည် အစောပိုင်းစမ်းသပ်သူများအတွက် ChatGPT Rival Bard ကို ကြေညာပြီး AI ဝန်ဆောင်မှုကို ထုတ်ပေးသည်။",
            "slug"=>"Google သည် အစောပိုင်းစမ်းသပ်သူများအတွက် ChatGPT Rival Bard ကို ကြေညာပြီး AI ဝန်ဆောင်မှုကို ထုတ်ပေးသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-5.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"ဂူဂျာရတ်ရှိ Vedanta ၏ Semiconductor Unit ကို David Reed က ဦးဆောင်မည်ဖြစ်သည်။ ဖုန်းများ၊ လက်ပ်တော့များအတွက် Chips များထုတ်လုပ်ရန်",
            "slug"=>"ဂူဂျာရတ်ရှိ Vedanta ၏ Semiconductor Unit ကို David Reed က ဦးဆောင်မည်ဖြစ်သည်။ ဖုန်းများ၊ လက်ပ်တော့များအတွက် Chips များထုတ်လုပ်ရန်",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-6.jpeg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"အီးယူဥပဒေပြုသူများသည် ChatGPT နှင့်ပတ်သက်သောစိုးရိမ်မှုများကြားမှမတ်လတွင် AI စည်းမျဉ်းများကို အပြီးသတ်ရန်စီစဉ်နေပါသည်။",
            "slug"=>"အီးယူဥပဒေပြုသူများသည် ChatGPT နှင့်ပတ်သက်သောစိုးရိမ်မှုများကြားမှမတ်လတွင် AI စည်းမျဉ်းများကို အပြီးသတ်ရန်စီစဉ်နေပါသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-7.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"လီယွန်နယ်မက်ဆီသည် ပီအက်စ်ဂျီအသင်းအား အနိုင်ရရှိရန် ဂိုးသွင်းခဲ့သည်။",
            "slug"=>"လီယွန်နယ်မက်ဆီသည် ပီအက်စ်ဂျီအသင်းအား အနိုင်ရရှိရန် ဂိုးသွင်းခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-3.jpg",
            "visitors"=>4
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"Tesla ၏ရှယ်ယာစျေးနှုန်းနှင့်ပတ်သက်ပြီး 2018 ခုနှစ်တွင် Elon Musk သည် တာဝန်မကင်းကြောင်း တွေ့ရှိခဲ့သည်။",
            "slug"=>"Tesla ၏ရှယ်ယာစျေးနှုန်းနှင့်ပတ်သက်ပြီး 2018 ခုနှစ်တွင် Elon Musk သည် တာဝန်မကင်းကြောင်း တွေ့ရှိခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-8.webp"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,"title"=>"Britney Spears သည် ကျန်းမာရေးစစ်ဆေးမှုကို 'နောက်ပြောင်သောဖုန်းခေါ်ဆိုမှုများ' ပြီးနောက် သူမ၏ကိုယ်ရေးကိုယ်တာအချက်အလက်များကို လေးစားရန် ပရိသတ်များကို
            တောင်းဆိုခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "slug"=>"Britney Spears သည် ကျန်းမာရေးစစ်ဆေးမှုကို 'နောက်ပြောင်သောဖုန်းခေါ်ဆိုမှုများ' ပြီးနောက် သူမ၏ကိုယ်ရေးကိုယ်တာအချက်အလက်များကို လေးစားရန် ပရိသတ်များကို တောင်းဆိုခဲ့သည်။",
            "thumbnail"=>"celebrity-2.jpg",
            "visitors"=>6
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"Priscilla Presley သည် သမီးလေး Lisa Marie Presley ကို Graceland တွင် မြေးမလေးရေးသော ကဗျာဖြင့် ချီးမြှောက်သည်",
            "slug"=>"Priscilla Presley သည် သမီးလေး Lisa Marie Presley ကို Graceland တွင် မြေးမလေးရေးသော ကဗျာဖြင့် ချီးမြှောက်သည်",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"celebrity-3.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"အစိုးရဝဘ်ဆိုဒ် 50 ခု ဟက်ခ်ခံရပြီး 2022 ခုနှစ်တွင် ဒေတာချိုးဖောက်မှု 8 ခု- IT ဝန်ကြီး Ashwini Vaishnaw",
            "slug"=>"အစိုးရဝဘ်ဆိုဒ် 50 ခု ဟက်ခ်ခံရပြီး 2022 ခုနှစ်တွင် ဒေတာချိုးဖောက်မှု 8 ခု- IT ဝန်ကြီး Ashwini Vaishnaw",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-9.webp",
            "visitors"=>58
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"James Cameron သည် ၎င်း၏ 1998 အော်စကာဆုပေးပွဲ မိန့်ခွန်းတွင် 'အမိုက်စား' ဟုခေါ်သည့် အခိုက်အတန့်ကို ပြန်လည်ကြည့်ရှုသည်။",
            "slug"=>"James Cameron သည် ၎င်း၏ 1998 အော်စကာဆုပေးပွဲ မိန့်ခွန်းတွင် 'အမိုက်စား' ဟုခေါ်သည့် အခိုက်အတန့်ကို ပြန်လည်ကြည့်ရှုသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"celebrity-4.jpg",
            "visitors"=>77
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"Celebrity Jeopardy သည် ချန်ပီယံအသစ်သရဖူကို ဆွတ်ခူးခဲ့သည်။",
            "slug"=>"Celebrity Jeopardy သည် ချန်ပီယံအသစ်သရဖူကို ဆွတ်ခူးခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"celebrity-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"ဒေါ့မွန်အသင်းမှ Sebastien Haller သည် ကင်ဆာရောဂါကုသမှုခံယူပြီးနောက် ပထမဆုံးဂိုးကို သွင်းယူပေးခဲ့သည်။",
            "slug"=>"ဒေါ့မွန်အသင်းမှ Sebastien Haller သည် ကင်ဆာရောဂါကုသမှုခံယူပြီးနောက် ပထမဆုံးဂိုးကို သွင်းယူပေးခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-4.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>48,
            "language_id"=>2,
            "title"=>"ကင်မရွန်းမြို့တော်တွင် မြေပြိုကျမှုကြောင့် လူ ၁၄ ဦးထက်မနည်း သေဆုံးခဲ့သည်။",
            "slug"=>"ကင်မရွန်းမြို့တော်တွင် မြေပြိုကျမှုကြောင့် လူ ၁၄ ဦးထက်မနည်း သေဆုံးခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"africa-10.jpg",
            "visitors"=>21
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"ခရစ်စတီယာနို ရော်နယ်ဒိုဟာ ကလပ်အသင်းသစ် Al Nassr အတွက် သူ့ရဲ့ ပထမဆုံးဂိုးကို သွင်းယူပေးခဲ့ပါတယ်။",
            "slug"=>"ခရစ်စတီယာနို ရော်နယ်ဒိုဟာ ကလပ်အသင်းသစ် Al Nassr အတွက် သူ့ရဲ့ ပထမဆုံးဂိုးကို သွင်းယူပေးခဲ့ပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-5.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"Crown Prosecution Service မှ Manchester United မှ Mason Greenwood အား မုဒိမ်းကျင့်ရန် ကြိုးပမ်းမှုအား ရုပ်သိမ်းလိုက်သည်။",
            "slug"=>"Crown Prosecution Service မှ Manchester United မှ Mason Greenwood အား မုဒိမ်းကျင့်ရန် ကြိုးပမ်းမှုအား ရုပ်သိမ်းလိုက်သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-6.jpg",
            "visitors"=>43
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"ပုရွက်ဆိတ်များမှ လင်းနို့များအထိ၊ Ozzy Osbourne ၏ ရူးသွပ်သောဘဝသည် လမ်းပေါ်တွင်ရှိသည်။",
            "slug"=>"ပုရွက်ဆိတ်များမှ လင်းနို့များအထိ၊ Ozzy Osbourne ၏ ရူးသွပ်သောဘဝသည် လမ်းပေါ်တွင်ရှိသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"life-6.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"Portia de Rossi သည် ဇနီးဖြစ်သူ Ellen DeGeneres အား ကတိသစ္စာပြုခြင်းဖြင့် အံ့အားသင့်စေခဲ့သည်။",
            "slug"=>"Portia de Rossi သည် ဇနီးဖြစ်သူ Ellen DeGeneres အား ကတိသစ္စာပြုခြင်းဖြင့် အံ့အားသင့်စေခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"life-7.jpg",
            "visitors"=>33
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"Motown အဆိုတော်နှင့် သီချင်းရေးဆရာ Barrett Strong သည် ၈၁ နှစ်တွင် ကွယ်လွန်ခဲ့သည်။",
            "slug"=>"Motown အဆိုတော်နှင့် သီချင်းရေးဆရာ Barrett Strong သည် ၈၁ နှစ်တွင် ကွယ်လွန်ခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"life-8.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"PSG အသင်းကို အနိုင်ရရှိခဲ့တဲ့ပွဲမှာ ပင်နယ်တီနှစ်ကြိမ်လွဲချော်ခဲ့တဲ့ Kylian Mbappe ဟာ တံကောက်ကြောဒဏ်ရာကြောင့် (၃)ပတ်လောက် အနားယူရတော့မှာဖြစ်ပါတယ်။",
            "slug"=>"PSG အသင်းကို အနိုင်ရရှိခဲ့တဲ့ပွဲမှာ ပင်နယ်တီနှစ်ကြိမ်လွဲချော်ခဲ့တဲ့ Kylian Mbappe ဟာ တံကောက်ကြောဒဏ်ရာကြောင့် (၃)ပတ်လောက် အနားယူရတော့မှာဖြစ်ပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-7.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"မက်ဒရစ်မြို့ရှိ တံတားပေါ်မှ လူမည်းဘောလုံးကြယ်ပွင့်အား ကြိုးပေးဆွဲချပြီးနောက် အက်သလက်တီကိုမက်ဒရစ်အသင်းအား ဗီနီစီယပ်စ်ဂျူနီယာက ဂိုးသွင်းခဲ့သည်။",
            "slug"=>"မက်ဒရစ်မြို့ရှိ တံတားပေါ်မှ လူမည်းဘောလုံးကြယ်ပွင့်အား ကြိုးပေးဆွဲချပြီးနောက် အက်သလက်တီကိုမက်ဒရစ်အသင်းအား ဗီနီစီယပ်စ်ဂျူနီယာက ဂိုးသွင်းခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-8.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"Demi Lovato ပိုစတာသည် ခရစ်ယာန်များကို စော်ကားခြင်းအတွက် ကြော်ငြာလုပ်ငန်းမှ တားမြစ်ထားသည်။",
            "slug"=>"Demi Lovato ပိုစတာသည် ခရစ်ယာန်များကို စော်ကားခြင်းအတွက် ကြော်ငြာလုပ်ငန်းမှ တားမြစ်ထားသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"celebrity-9.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"ဘရာဇီးလ်ဘောလုံးသမား Dani Alves ဟာ လိင်ပိုင်းဆိုင်ရာ စော်ကားမှု စွပ်စွဲချက်နဲ့ ဘာစီလိုနာမှာ ထိန်းသိမ်းခံခဲ့ရပါတယ်",
            "slug"=>"ဘရာဇီးလ်ဘောလုံးသမား Dani Alves ဟာ လိင်ပိုင်းဆိုင်ရာ စော်ကားမှု စွပ်စွဲချက်နဲ့ ဘာစီလိုနာမှာ ထိန်းသိမ်းခံခဲ့ရပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-9.jpg",
            "visitors"=>8
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>62,
            "language_id"=>2,
            "title"=>"Intel သည် ပြီးခဲ့သောနှစ်တွင် ၎င်း၏ တရားရုံးတိုက်ပွဲတွင် အနိုင်ရခဲ့သော်လည်း အီးယူမှ ဆန့်ကျင်မှု ဒဏ်ကြေးငွေ ဒဏ်ရိုက်ခံရမည်ကို Intel ကြောက်ရွံ့နေပါသည်။",
            "slug"=>"Intel သည် ပြီးခဲ့သောနှစ်တွင် ၎င်း၏ တရားရုံးတိုက်ပွဲတွင် အနိုင်ရခဲ့သော်လည်း အီးယူမှ ဆန့်ကျင်မှု ဒဏ်ကြေးငွေ ဒဏ်ရိုက်ခံရမည်ကို Intel ကြောက်ရွံ့နေပါသည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"tech-10.jpeg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>71,
            "language_id"=>2,
            "title"=>"'Eight Is Enough' သရုပ်ဆောင် Adam Rich သည် အသက် 54 နှစ်တွင် ကွယ်လွန်ခဲ့သည်။",
            "slug"=>"'Eight Is Enough' သရုပ်ဆောင် Adam Rich သည် အသက် 54 နှစ်တွင် ကွယ်လွန်ခဲ့သည်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"celebrity-10.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>91,
            "language_id"=>2,
            "title"=>"Lionel Messi နဲ့ Cristiano Ronaldo တို့ဟာ ဆော်ဒီအာရေးဗီးယားမှာ ရှိတဲ့ ပြပွဲပြိုင်ပွဲမှာ ဂိုးသွင်းခဲ့ကြပါတယ်။",
            "slug"=>"Lionel Messi နဲ့ Cristiano Ronaldo တို့ဟာ ဆော်ဒီအာရေးဗီးယားမှာ ရှိတဲ့ ပြပွဲပြိုင်ပွဲမှာ ဂိုးသွင်းခဲ့ကြပါတယ်။",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"football-10.jpg"
        ]);

        NewsPost::factory()->create([
            "sub_category_id"=>57,
            "language_id"=>2,
            "title"=>"2021 ခုနှစ်တွင် ဆော်ဒီအာရေဗျတွင် အီရန်၌ ကွပ်မျက်မှုများ မြင့်တက်လာခဲ့သည်",
            "slug"=>"2021 ခုနှစ်တွင် ဆော်ဒီအာရေဗျတွင် အီရန်၌ ကွပ်မျက်မှုများ မြင့်တက်လာခဲ့သည်",
                     "body"=>"
            Lorem Ipsum သည် ပုံနှိပ်စက်နှင့် စာစီစာရိုက်လုပ်ငန်း၏ ရိုးရိုးရှင်းရှင်း စာလုံးသေးသေးလေးဖြစ်သည်။ Lorem Ipsum သည် 1500 ခုနှစ်များကတည်းက အမည်မသိပုံနှိပ်စက်တစ်ခုမှ အမျိုးအစားနမူနာစာအုပ်တစ်အုပ်ကို ဖန်တီးရန် မွှေလိုက်သောအခါတွင် စက်မှုလုပ်ငန်း၏ စံနမူနာစာသားဖြစ်ခဲ့သည်။ ၎င်းသည် ငါးရာစုနှစ်များသာမကဘဲ အီလက်ထရွန်းနစ်စာရိုက်စနစ်သို့ ခုန်တက်သွားကာ အခြေခံအားဖြင့် မပြောင်းလဲဘဲ ကျန်ရှိနေခဲ့သည်။ Lorem Ipsum စာပိုဒ်များပါရှိသော Letraset စာရွက်များကို 1960 ခုနှစ်များတွင် ထုတ်ဝေခဲ့ပြီး မကြာသေးမီက Aldus PageMaker ကဲ့သို့သော ဒက်စ်တော့ဖြန့်ချိရေးဆော့ဖ်ဝဲဖြင့် Lorem Ipsum ဗားရှင်းများပါ၀င်သည်။

            လူကြိုက်များသောယုံကြည်ချက်နှင့်ဆန့်ကျင်ဘက်ဖြစ်သော Lorem Ipsum သည် ရိုးရိုးကျပန်းစာသားမဟုတ်ပါ။ ၎င်းသည် ဘီစီ ၄၅ မှ ဘီစီ ၄၅ မှ ဂန္ထဝင်လက်တင်စာပေတွင် အမြစ်များပါရှိပြီး ၎င်းသည် နှစ်ပေါင်း ၂၀၀၀ ကျော်သက်တမ်းရှိပြီဖြစ်သည်။ ဗာဂျီးနီးယားရှိ Hampden-Sydney ကောလိပ်မှ လက်တင်ပါမောက္ခ Richard McClintock သည် ပိုမိုရှင်းလင်းသော လက်တင်စကားလုံးများ၊ consectetur၊ Lorem Ipsum ကျမ်းပိုဒ်မှ စကားလုံးများကို ဂန္ထဝင်စာပေများတွင် ကိုးကားကြည့်ရာ သံသယဖြစ်ဖွယ်အရင်းအမြစ်ကို ရှာဖွေတွေ့ရှိခဲ့သည်။ Lorem Ipsum သည် 45 BC တွင်ရေးသားခဲ့သော Cicero မှ 'de Finibus Bonorum et Malorum' (De Finibus Bonorum et Malorum) ၏ အပိုင်း 1.10.32 နှင့် 1.10.33 တို့မှ ဆင်းသက်လာသည်။ ဤစာအုပ်သည် ကျင့်ဝတ်ဆိုင်ရာ သီအိုရီနှင့် စပ်လျဉ်းသည့် တက်ကျမ်းဖြစ်ပြီး လက်ရာမြောက်သည့် ခေတ်ကာလတွင် အလွန်ရေပန်းစားသည်။ Lorem Ipsum ၏ ပထမစာကြောင်းဖြစ်သော 'Lorem ipsum dolor sit amet..' သည် အပိုင်း 1.10.32 ရှိ စာကြောင်းမှ ဆင်းသက်လာသည်။

            1500 ခုနှစ်များကတည်းက အသုံးပြုခဲ့သော Lorem Ipsum ၏ စံအပိုင်းကို စိတ်ဝင်စားသူများအတွက် အောက်တွင် ပြန်လည်ထုတ်လုပ်ထားပါသည်။ Cicero မှ 'de Finibus Bonorum et Malorum' မှ အပိုင်း 1.10.32 နှင့် 1.10.33 ကို H. Rackham မှ 1914 ဘာသာပြန်ဆိုမှုမှ အင်္ဂလိပ်ဗားရှင်းဖြင့် ၎င်းတို့၏ မူရင်းပုံစံအတိအကျဖြင့် ပြန်လည်ထုတ်ပေးပါသည်။


            စာမျက်နှာတစ်ခု၏ အပြင်အဆင်ကိုကြည့်သောအခါ စာဖတ်သူသည် ဖတ်ရှုနိုင်သောအကြောင်းအရာကြောင့် အာရုံပြောင်းသွားလိမ့်မည်ဟူသော ရှည်လျားသောအချက်ဖြစ်သည်။ Lorem Ipsum ကို အသုံးပြုရခြင်း၏ အဓိကအချက်မှာ ၎င်းတွင် 'Content here, content here' ကိုအသုံးပြုခြင်းနှင့် ဆန့်ကျင်ဘက်အနေဖြင့် ၎င်းတွင် စာလုံးများ ပုံမှန်ဖြန့်ဝေမှု ပိုများပြီး အင်္ဂလိပ်လိုဖတ်နိုင်သော ပုံသဏ္ဍန်ဖြစ်သည်။ ဒက်စတော့ဖြန့်ချိရေးပက်ကေ့ဂျ်များနှင့် ဝဘ်စာမျက်နှာတည်းဖြတ်သူအများအပြားသည် ယခု Lorem Ipsum ကို ၎င်းတို့၏မူလပုံစံစာသားအဖြစ် Lorem Ipsum ကိုအသုံးပြုကြပြီး 'lorem ipsum' ကိုရှာဖွေခြင်းသည် ၎င်းတို့၏ ငယ်ရွယ်ဆဲဖြစ်သော ဝဘ်ဆိုက်များစွာကို ရှာဖွေတွေ့ရှိမည်ဖြစ်သည်။ အမျိုးမျိုးသောဗားရှင်းများသည် နှစ်များကြာလာသည်နှင့်အမျှ၊ တစ်ခါတစ်ရံတွင် မတော်တဆ၊ တစ်ခါတစ်ရံတွင် ရည်ရွယ်ချက်ဖြင့် (ဟာသနှင့်တူသည်)။

            Lorem Ipsum ၏ ကျမ်းပိုဒ်များစွာတွင် ကွဲပြားမှုများရှိသော်လည်း အများစုသည် အနည်းငယ်မျှပင် မယုံနိုင်စရာပုံပေါ်သည့် ပုံစံတစ်မျိုးမျိုးဖြင့် ပြောင်းလဲခြင်းကို ခံစားခဲ့ကြရသည်။ သင်သည် Lorem Ipsum ၏ကျမ်းပိုဒ်ကိုအသုံးပြုမည်ဆိုပါက၊ စာသား၏အလယ်တွင် ရှက်စရာကောင်းသည့်အရာတစ်ခုမျှ ဝှက်ထားခြင်းမရှိကြောင်း သေချာရန်လိုသည်။ အင်တာနက်ပေါ်ရှိ Lorem Ipsum ဂျင်နရေတာများအားလုံးသည် လိုအပ်သလို ကြိုတင်သတ်မှတ်ထားသောအပိုင်းများကို ထပ်ခါတလဲလဲပြုလုပ်လေ့ရှိပြီး ၎င်းသည် အင်တာနက်ပေါ်ရှိ ပထမဆုံး စစ်မှန်သောမီးစက်ဖြစ်လာသည်။ ၎င်းသည် ကျိုးကြောင်းဆီလျော်သော Lorem Ipsum ကို ထုတ်လုပ်ရန်အတွက် လက်တင်စကားလုံး 200 ကျော်၏ အဘိဓာန်ကို အသုံးပြု၍ စံပြဝါကျဖွဲ့စည်းပုံများနှင့်အတူ ပေါင်းစပ်ထားသည်။ ထုတ်လုပ်လိုက်သော Lorem Ipsum သည် ထပ်ခါတလဲလဲ၊ ထိုးသွင်းထားသော ဟာသများ၊ သို့မဟုတ် စရိုက်လက္ခဏာမဟုတ်သော စကားလုံးများ စသည်တို့မှ အမြဲကင်းစင်ပါသည်။",
            "thumbnail"=>"revolution-6.webp"
        ]);
    }
}
