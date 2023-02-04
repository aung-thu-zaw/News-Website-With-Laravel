<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\VideoNewsPost;
use Share;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class VideoNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Video News");

        LanguageHelper::readJson();

        $newsVideoPosts=VideoNewsPost::with("subCategory", "author:id,name")
                        ->filterRequest(request(["query","subcategory"]))
                        ->orderBy("id", "desc")
                        ->paginate(18);

        return view("video-news-post.index", compact("newsVideoPosts"));
    }

    public function show(VideoNewsPost $videoNewsPost)
    {
        Meta::setTitle($videoNewsPost->title);

        $socialShare=Share::currentPage()
                    ->facebook()
                    ->twitter()
                    ->whatsApp()
                    ->linkedIn()
                    ->getRawLinks();

        $videoNewsPost->visitors=$videoNewsPost->visitors+1;

        $videoNewsPost->update();

        $relatedNewsPosts=NewsPost::select("title", "slug")
                          ->where("sub_category_id", $videoNewsPost->sub_category_id)
                          ->take(15)
                          ->get();


        $relatedTopNewsVideos=VideoNewsPost::with("subCategory", "author:id,name")
                              ->where("sub_category_id", $videoNewsPost->sub_category_id)
                              ->where("slug", "!=", $videoNewsPost->slug)
                              ->orderBy("visitors", "desc")
                              ->take(10)
                              ->get();

        return view("video-news-post.show", compact("videoNewsPost", "socialShare", "relatedNewsPosts", "relatedTopNewsVideos"));
    }
}
