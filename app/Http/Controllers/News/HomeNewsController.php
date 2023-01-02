<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\BreakingNews;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\TrendingVideo;
use Share;

class HomeNewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            "breakingNewsPosts"=>BreakingNews::with("subCategory", "author")->orderBy("id", "desc")->take(5)->get(),
            "trendingVideos"=>TrendingVideo::orderBy("id", "desc")->get(),
            "subCategories"=>SubCategory::with("newsPosts.subCategory", "newsPosts.author")->orderBy("id", "desc")->get()
        ]);
    }

    public function show(NewsPost $newsPost)
    {
        $socialShare=Share::currentPage()
            ->facebook()
            ->twitter()
            ->whatsApp()
            ->linkedIn()
            ->getRawLinks();

        $newsPost->visitors=$newsPost->visitors+1;
        $newsPost->update();

        return view("news.show", [
            "newsPost"=>$newsPost,
            "socialShare"=>$socialShare,
            "tags"=>Tag::select("name", "slug")->where("news_post_id", $newsPost->id)->get(),
        ]);
    }
}
