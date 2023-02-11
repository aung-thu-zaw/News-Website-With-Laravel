<?php

namespace App\Http\Controllers\Tags;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class TagPostController extends Controller
{
    public function show(Tag $tag)
    {
        Meta::setTitle("$tag->name");

        LanguageHelper::readJson();

        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;

        if (request("type")=="articles") {
            $tag=Tag::with("newsPosts")
                 ->where("slug", $tag->slug)
                 ->first();

            $newsPosts=$tag->newsPosts()->filterRequest(request(["query","subcategory"]))->paginate(18);

            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();

            return view("tags.news-posts.show", compact("tag", "newsPosts", "subCategories"));
        } elseif (request("type")=="videos") {
            $tag=Tag::with("videoNewsPosts")
                 ->where("slug", $tag->slug)
                 ->first();

            $videoNewsPosts=$tag->videoNewsPosts()->filterRequest(request(["query","subcategory"]))->paginate(18);

            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();

            return view("tags.news-posts.show", compact("tag", "videoNewsPosts", "subCategories"));
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
