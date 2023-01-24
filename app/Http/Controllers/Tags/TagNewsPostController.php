<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\Tag;

class TagNewsPostController extends Controller
{
    public function show(Tag $tag)
    {
        $tag=Tag::with("newsPosts")
             ->where("slug", $tag->slug)
             ->first();


        return view("tags.news-posts.show", compact("tag"));
    }


    public function newsPostTagHandler(NewsPost $newsPost, Tag $tag)
    {
        $newsPost->tags()->detach($tag);
        return redirect()->back()->with("success", "Tag is deleted successfully");
    }
}
