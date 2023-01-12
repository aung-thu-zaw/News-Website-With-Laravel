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

        $latestNewsPosts=NewsPost::with("subCategory.category", "author")
                        ->orderBy("id", "desc")
                        ->take(5)
                        ->get();

        $trendingVideos=TrendingVideo::orderBy("id", "desc")->get();


        $subCategories=SubCategory::with("newsPosts.subCategory", "newsPosts.author", "category.subCategories")
                       ->orderBy("id", "desc")
                       ->get();

        $newsVideoPosts=VideoNewsPost::with("author")
                        ->orderBy("visitors", "desc")
                        ->take(12)
                        ->get();

        if (request("search")) {
            $newsPosts=NewsPost::search(request("search"))->paginate(10);

            $newsPosts->load("subCategory.category", "author");





            return view("search-news.index", compact("newsPosts"));
        } else {
            return view('news.index', compact("latestNewsPosts", "trendingVideos", "subCategories", "newsVideoPosts"));
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

        return view("news.show", compact("newsPost", "socialShare"));
    }
}
