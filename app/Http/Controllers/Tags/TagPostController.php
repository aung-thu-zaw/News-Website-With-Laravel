<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\Tag;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class TagPostController extends Controller
{
    public function show(Tag $tag)
    {
        Meta::setTitle("$tag->name");

        if (request("type")=="articles") {
            $tag=Tag::with("newsPosts")
                 ->where("slug", $tag->slug)
                 ->first();

            $newsPosts=$tag->newsPosts()->filterRequest(request(["query","subcategory"]))->paginate(18);

            return view("tags.news-posts.show", compact("tag", "newsPosts"));
        } elseif (request("type")=="videos") {
            $tag=Tag::with("videoNewsPosts")
                 ->where("slug", $tag->slug)
                 ->first();

            $videoNewsPosts=$tag->videoNewsPosts()->filterRequest(request(["query","subcategory"]))->paginate(18);

            return view("tags.news-posts.show", compact("tag", "videoNewsPosts"));
        }
    }


    public function newsPostTagHandler(NewsPost $newsPost, Tag $tag)
    {
        $newsPost->tags()->detach($tag);
        return redirect()->back()->with("success", "Tag is deleted successfully");
    }


    public function videonewsPostTagHandler(VideoNewsPost $videoNewsPost, Tag $tag)
    {
        $videoNewsPost->tags()->detach($tag);
        return redirect()->back()->with("success", "Tag is deleted successfully");
    }
}
