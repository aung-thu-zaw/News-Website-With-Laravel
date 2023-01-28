<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\TrendingVideo;
use App\Models\VideoNewsPost;
use Share;
use Butschster\Head\Facades\Meta;

class HomeNewsController extends Controller
{
    public function index()
    {
        Meta::prependTitle('Home');

        $latestNewsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                        ->orderBy("id", "desc")
                        ->take(5)
                        ->get();


        $trendingVideos=TrendingVideo::orderBy("id", "desc")
                        ->get();


        $subCategories=SubCategory::select("id", "category_id", "name", "slug", "status_on_home")
                       ->with("newsPosts", "category.subCategories:id,name,slug")
                       ->orderBy("id", "desc")
                       ->get();

        $videoNewsPosts=VideoNewsPost::with("subCategory", "author:id,name")
                        ->orderBy("id", "desc")
                        ->take(12)
                        ->get();


        if (request("query")) {
            $newsPosts=NewsPost::orderBy("id", "desc")->filterRequest(request(["query","subcategory"]))->paginate(18)->withQueryString();

            $newsPosts->load("subCategory", "author");

            return view("search-news.index", compact("newsPosts"));
        } else {
            return view('news.index', compact("latestNewsPosts", "trendingVideos", "subCategories", "videoNewsPosts"));
        }
    }

    public function show(NewsPost $newsPost)
    {
        Meta::setTitle("$newsPost->title");

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
