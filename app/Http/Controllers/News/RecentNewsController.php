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

class RecentNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Recent News");

        LanguageHelper::readJson();

        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;


        if (request("type")=="articles") {
            $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                       ->where("language_id", $currentLanguageId)
                       ->orderBy("id", "desc")
                       ->filterRequest(request(["query","subcategory"]))
                       ->paginate(18)
                       ->withQueryString();
            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();
            return view("popular-news-and-recent-news.recent-news.index", compact("newsPosts", "subCategories"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                            ->where("language_id", $currentLanguageId)
                            ->orderBy("id", "desc")
                            ->filterRequest(request(["query","subcategory"]))
                            ->paginate(18)
                            ->withQueryString();
            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();
            return view("popular-news-and-recent-news.recent-news.index", compact("videoNewsPosts", "subCategories"));
        }
    }
}
