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

        $latestNewsPosts=NewsPost::with("subCategory.category:id,slug", "author:id,name")
                        ->orderBy("id", "desc")
                        ->take(5)
                        ->get();

        $trendingVideos=TrendingVideo::orderBy("id", "desc")
                        ->get();


        $subCategories=SubCategory::select("id", "category_id", "name", "slug", "status_on_home")
                       ->with("newsPosts.subCategory:id,name,slug", "newsPosts.author:id,name", "category.subCategories:id,name,slug")
                       ->orderBy("id", "desc")
                       ->get();

        $newsVideoPosts=VideoNewsPost::select("user_id", "video_id", "title", "slug", "created_at")
                        ->with("author:id,name")
                        ->orderBy("id", "desc")
                        ->take(12)
                        ->get();



        // if (request("q")) {
        //     $newsPosts=NewsPost::search(request("q"))->paginate(18)->withQueryString();

        //     $newsPosts->load("subCategory.category", "author");

        //     return view("search-news.index", compact("newsPosts"));
        // } else {
        return view('news.index', compact("latestNewsPosts", "trendingVideos", "subCategories", "newsVideoPosts"));
        // }
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

        return view("news.show", compact("newsPost", "socialShare", "relatedNewsPosts"));
    }
}
