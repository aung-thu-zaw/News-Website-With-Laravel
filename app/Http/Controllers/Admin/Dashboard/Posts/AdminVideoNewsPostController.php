<?php

namespace App\Http\Controllers\Admin\Dashboard\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Butschster\Head\Facades\Meta;
use Illuminate\Validation\Rule;
use App\Models\VideoNewsPost;

class AdminVideoNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Video News Posts");
        return view("admin.dashboard.posts.video-news-posts.index", [
            "videoNewsPosts"=>VideoNewsPost::with("author")->where("user_id", 1)->orderBy("id", "desc")->paginate(10)
        ]);
    }

    public function create()
    {
        Meta::prependTitle("Video News Post Create");
        return view("admin.dashboard.posts.video-news-posts.create");
    }

    public function store(Request $request)
    {
        $postFormData=$request->validate([
            "video_id"=>["required"],
            "title"=>["required",Rule::unique("video_news_posts", "title")],
            "slug"=>["required",Rule::unique("video_news_posts", "slug")],
            "body"=>["required"],
        ]);

        $postFormData["user_id"]=auth()->user()->id;

        $post= VideoNewsPost::create($postFormData);

        if ($request->input("tags")) {
            $request->validate([
                "tags"=>["required"],
            ]);

            $tagsNewArray=[];
            $tagsArray=explode(",", $request->tags);

            foreach ($tagsArray as $tag) {
                $tagsNewArray[]=trim($tag);
            }

            $tagsNewArray=array_values(array_unique($tagsNewArray));

            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();

                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $post->tags()->attach($tagModel);
                }

                if ($countExisitngTags) {
                    $post->tags()->attach($exisitngTags);
                }
            }
        }

        return to_route("admin.video-news-posts.index")->with("success", "Video Post is created successfully");
    }


    public function edit(VideoNewsPost $videoNewsPost)
    {
        Meta::prependTitle("Video News Post Edit");
        return view("admin.dashboard.posts.video-news-posts.edit", [
            "videoNewsPost"=>$videoNewsPost,
            "page"=>request('page'),
        ]);
    }

    public function update(Request $request, VideoNewsPost $videoNewsPost)
    {
        $postFormData=$request->validate([
            "video_id"=>["required"],
            "title"=>["required",Rule::unique("video_news_posts", "title")->ignore($videoNewsPost->id)],
            "slug"=>["required",Rule::unique("video_news_posts", "slug")->ignore($videoNewsPost->id)],
            "body"=>["required"],
        ]);

        $postFormData["user_id"]=auth()->user()->id;

        $videoNewsPost->update($postFormData);

        if ($request->input("tags")) {
            $request->validate([
                "tags"=>["required"],
            ]);

            $tagsNewArray=[];
            $tagsArray=explode(",", $request->tags);

            foreach ($tagsArray as $tag) {
                $tagsNewArray[]=trim($tag);
            }

            $tagsNewArray=array_values(array_unique($tagsNewArray));

            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();



                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $videoNewsPost->tags()->attach($tagModel);
                }

                foreach ($videoNewsPost->tags as $videoExistTag) {
                    if ($videoExistTag) {
                        // $videoExistTag->tags()->attach($tag);
                        $videoNewsPost->tags()->detach($exisitngTags);
                        // echo "hit";
                        // echo "<pre/>";
                        // echo $videoExistTag;
                    }
                }

                // die();

                if ($countExisitngTags) {
                    $videoNewsPost->tags()->attach($exisitngTags);
                }
            }
        }

        return to_route("admin.video-news-posts.index", "page=".request("page"))->with("success", "Video Post is updated successfully");
    }

    public function destroy(VideoNewsPost $videoNewsPost)
    {
        $videoNewsPost->delete();
        return to_route("admin.video-news-posts.index", "page=".request("page"))->with("success", "Video Post is deleted successfully");
    }
}
