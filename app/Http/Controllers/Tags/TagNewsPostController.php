<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\Tag;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;

class TagNewsPostController extends Controller
{
    public function show(Tag $tag)
    {
        return view("tags.news-posts.show", [
            "tag"=>Tag::with("newsPosts.subCategory")->where("slug", $tag->slug)->first()
        ]);
    }


    public function newsPostTagHandler(NewsPost $newsPost, Tag $tag)
    {
        $newsPost->tags()->detach($tag);
        return redirect()->back()->with("success", "Tag is deleted successfully");
    }

}
