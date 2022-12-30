<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisement;
use App\Models\NewsPost;
use App\Models\PostReact;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Share;

class HomeNewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            "homeAdvertisement"=>HomeAdvertisement::where("id", 1)->first(),
            "latestNewsPosts"=>NewsPost::with("subCategory")->orderBy("id", "desc")->take(5)->get(),
            "subCategories"=>SubCategory::with("newsPosts.author", "newsPosts.subCategory")->orderBy("id", "desc")->get()
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
            "tags"=>Tag::where("news_post_id", $newsPost->id)->get(),
        ]);
    }
}
