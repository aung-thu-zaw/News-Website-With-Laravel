<?php

namespace App\Http\Controllers\Admin\Dashboard\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Validation\Rule;
use Butschster\Head\Facades\Meta;

class AdminNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("News Post");
        return view("admin.dashboard.posts.news-posts.index", [
            "newsPosts"=>NewsPost::with("subCategory.category", "author")->where("user_id", 1)->orderBy("id", "desc")->paginate(10)
        ]);
    }

    public function create()
    {
        return view("admin.dashboard.posts.news-posts.create", [
            "subCategories"=>SubCategory::with("category")->get()
        ]);
    }

    public function store(Request $request)
    {
        $postFormData=$request->validate([
            "sub_category_id"=>["required",Rule::exists("sub_categories", "id")],
            "title"=>["required",Rule::unique("sub_categories", "name")],
            "slug"=>["required",Rule::unique("sub_categories", "slug")],
            "body"=>["required"],
        ]);

        if ($request->hasFile("thumbnail")) {
            $request->validate([
                "thumbnail"=>["required","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            $extension=$request->file("thumbnail")->extension();

            $time=time();

            $finalName="post-thumbnail-$time.$extension";

            $request->file("thumbnail")->storeAs("thumbnails", $finalName);

            $postFormData["thumbnail"]=$finalName;
        }
        $postFormData["user_id"]=auth()->user()->id;

        $post= NewsPost::create($postFormData);

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
                $tagModel=new Tag();
                $tagModel->news_post_id=$post->id;
                $tagModel->name=$tag;
                $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                $tagModel->save();
            }
        }

        return to_route("admin.post.index")->with("success", "Post is created successfully");
    }


    public function edit(NewsPost $newsPost)
    {
        return view("admin.dashboard.posts.news-posts.edit", [
            "newsPost"=>$newsPost,
            "subCategories"=>SubCategory::with("category")->get(),
        ]);
    }

    public function update(Request $request, NewsPost $newsPost)
    {
        $postFormData=$request->validate([
            "sub_category_id"=>["required",Rule::exists("sub_categories", "id")],
            "title"=>["required",Rule::unique("sub_categories", "name")->ignore(auth()->user()->id)],
            "slug"=>["required",Rule::unique("sub_categories", "slug")->ignore(auth()->user()->id)],
            "body"=>["required"],
        ]);


        if ($request->hasFile("thumbnail")) {
            $request->validate([
                "thumbnail"=>["required","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            if (!empty($newsPost->thumbnail) && file_exists(public_path("storage/thumbnails/$newsPost->thumbnail"))) {
                unlink(public_path("storage/thumbnails/$newsPost->thumbnail"));
            }

            $extension=$request->file("thumbnail")->extension();

            $time=time();

            $finalName="post-thumbnail-$time.$extension";

            $request->file("thumbnail")->storeAs("thumbnails", $finalName);

            $postFormData["thumbnail"]=$finalName;
        }

        $postFormData["user_id"]=auth()->user()->id;

        $newsPost->update($postFormData);

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
                $exisitngTag=Tag::where("news_post_id", $newsPost->id)->where("name", $tag)->count();
                if (!$exisitngTag) {
                    $tagModel=new Tag();
                    $tagModel->news_post_id=$newsPost->id;
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                }
            }
        }

        return to_route("admin.post.index")->with("success", "Post is updated successfully");
    }

    public function destroy(NewsPost $newsPost)
    {
        if (!empty($newsPost->thumbnail) && file_exists(public_path("storage/thumbnails/$newsPost->thumbnail"))) {
            unlink(public_path("storage/thumbnails/$newsPost->thumbnail"));
        }

        $newsPost->delete();
        return to_route("admin.post.index")->with("success", "Post is deleted successfully");
    }
}
