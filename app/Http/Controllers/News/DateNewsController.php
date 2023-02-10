<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class DateNewsController extends Controller
{
    public function handleDateFormat(Request $request)
    {
        $dateArray=explode("-", $request->date);

        $year=$dateArray[0];
        $month=$dateArray[1];
        $day=$dateArray[2];

        return to_route("date-news.show", [$year, $month, $day,'type'=>'articles']);
    }

    public function show($year, $month, $day)
    {
        Meta::setTitle("$year-$month-$day");

        LanguageHelper::readJson();

        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;

        if (request("type")=="articles") {
            $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                       ->whereYear("created_at", $year)
                       ->whereMonth("created_at", $month)
                       ->whereDay("created_at", $day)
                       ->where("language_id", $currentLanguageId)
                       ->filterRequest(request(["query","subcategory"]))
                       ->orderBy("id", "desc")
                       ->paginate(18);

            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();

            return view("date-post.show", compact("newsPosts", "subCategories"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                            ->whereYear("created_at", $year)
                            ->whereMonth("created_at", $month)
                            ->whereDay("created_at", $day)
                            ->where("language_id", $currentLanguageId)
                            ->filterRequest(request(["query","subcategory"]))
                            ->orderBy("id", "desc")
                            ->paginate(18);

            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();

            return view("date-post.show", compact("videoNewsPosts", "subCategories"));
        }
    }
}
