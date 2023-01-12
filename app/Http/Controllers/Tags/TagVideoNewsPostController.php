<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;

class TagVideoNewsPostController extends Controller
{
    public function show(Tag $tag)
    {
        return view("tags.video-news-posts.show", [
            "tag"=>Tag::with("videoNewsPosts.subCategory")->where("slug", $tag->slug)->first()
        ]);
    }


    public function videonewsPostTagHandler(VideoNewsPost $videoNewsPost, Tag $tag)
    {
        $videoNewsPost->tags()->detach($tag);
        return redirect()->back()->with("success", "Tag is deleted successfully");
    }
}
