<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BreakingNews;
use App\Models\NewsPost;
use App\Models\NewsVideoPost;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\TrendingVideo;
use App\Models\Video;
use App\Models\VideoNewsPost;
use Share;
use Butschster\Head\Facades\Meta;

class VideoNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Video News");
        return view("video-news-post.index", [
            "newsVideoPosts"=>VideoNewsPost::with("author")->orderBy("id", "desc")->paginate(12),
        ]);
    }

    public function show(VideoNewsPost $videoNewsPost)
    {
        Meta::setTitle("$videoNewsPost->title");
        $socialShare=Share::currentPage()
            ->facebook()
            ->twitter()
            ->whatsApp()
            ->linkedIn()
            ->getRawLinks();

        $videoNewsPost->visitors=$videoNewsPost->visitors+1;
        $videoNewsPost->update();

        return view("video-news-post.show", [
            "videoNewsPost"=>$videoNewsPost,
            "socialShare"=>$socialShare,
        ]);
    }
}
