<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\VideoNewsPost;
use Share;
use Butschster\Head\Facades\Meta;

class VideoNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Video News");

        $newsVideoPosts=VideoNewsPost::with("author:id,name")
                        ->filterRequest(request(["query"]))
                        ->orderBy("id", "desc")
                        ->paginate(20);

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

        $topVideoNews=VideoNewsPost::select("title", "slug")
                     ->with("author:id,name")
                     ->orderBy("visitors", "desc")
                     ->take(10)
                     ->get();

        return view("video-news-post.show", compact("videoNewsPost", "socialShare", "topVideoNews"));
    }
}
