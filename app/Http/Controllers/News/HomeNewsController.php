<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\TrendingVideo;
use App\Models\VideoNewsPost;
use Share;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class HomeNewsController extends Controller
{
    public function index()
    {
        Meta::prependTitle('Home');

        LanguageHelper::readJson();


        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;


        $latestNewsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                        ->where("language_id", $currentLanguageId)
                        ->orderBy("id", "desc")
                        ->take(5)
                        ->get();


        $trendingVideos=TrendingVideo::where("language_id", $currentLanguageId)
                        ->orderBy("id", "desc")
                        ->get();


        $subCategories=SubCategory::with("newsPosts", "category.subCategories:id,name,slug")
                       ->where("language_id", $currentLanguageId)
                       ->orderBy("id", "desc")
                       ->get();

        $videoNewsPosts=VideoNewsPost::with("subCategory", "author:id,name")
                        ->where("language_id", $currentLanguageId)
                        ->orderBy("id", "desc")
                        ->take(12)
                        ->get();


        if (request("query")) {
            if (request("type")=="articles") {
                $newsPosts=NewsPost::where("language_id", $currentLanguageId)
                           ->orderBy("id", "desc")
                           ->filterRequest(request(["query","subcategory"]))
                           ->paginate(18)
                           ->withQueryString();

                $newsPosts->load("subCategory", "author");

                $subCategories=SubCategory::with("category")->where("status_on_navbar", "show")->orderBy("id", "desc")->get();

                return view("search-news.index", compact("newsPosts", "subCategories"));
            } elseif (request("type")=="videos") {
                $videoNewsPosts=VideoNewsPost::where("language_id", $currentLanguageId)
                                ->orderBy("id", "desc")
                                ->filterRequest(request(["query","subcategory"]))
                                ->paginate(18)
                                ->withQueryString();

                $videoNewsPosts->load("subCategory", "author");

                $subCategories=SubCategory::with("category")->where("status_on_navbar", "show")->orderBy("id", "desc")->get();

                return view("search-news.index", compact("videoNewsPosts", "subCategories"));
            }
        } else {
            return view('news.index', compact("latestNewsPosts", "trendingVideos", "subCategories", "videoNewsPosts"));
        }
    }

    public function show(NewsPost $newsPost)
    {
        Meta::setTitle("$newsPost->title");

        LanguageHelper::readJson();

        $socialShare=Share::currentPage()
                    ->facebook()
                    ->twitter()
                    ->whatsApp()
                    ->linkedIn()
                    ->getRawLinks();

        $newsPost->visitors=$newsPost->visitors+1;

        $newsPost->update();

        $relatedNewsPosts=NewsPost::select("title", "slug")
                          ->where("sub_category_id", $newsPost->sub_category_id)
                          ->where("slug", "!=", $newsPost->slug)
                          ->take(15)
                          ->get();

        $relatedTopNewsVideos=VideoNewsPost::with("subCategory", "author:id,name")
                              ->where("sub_category_id", $newsPost->sub_category_id)
                              ->orderBy("visitors", "desc")
                              ->take(10)
                              ->get();

        return view("news.show", compact("newsPost", "socialShare", "relatedNewsPosts", "relatedTopNewsVideos"));
    }
}
