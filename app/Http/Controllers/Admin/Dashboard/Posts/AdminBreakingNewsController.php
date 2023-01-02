<?php

namespace App\Http\Controllers\Admin\Dashboard\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BreakingNews;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Validation\Rule;

class AdminBreakingNewsController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.posts.breaking-news.index", [
            "breakingNewsPosts"=>BreakingNews::with("subCategory.category", "author")->where("user_id", 1)->orderBy("id", "desc")->paginate(10)
        ]);
    }

    public function create()
    {
        return view("admin.dashboard.posts.breaking-news.create", [
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

        $post= BreakingNews::create($postFormData);

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
                $tagModel->breaking_news_id=$post->id;
                $tagModel->name=$tag;
                $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                $tagModel->save();
            }
        }

        return to_route("admin.post.breaking-news.index")->with("success", "Post is created successfully");
    }


    public function edit(BreakingNews $breakingNews)
    {
        return view("admin.dashboard.posts.breaking-news.edit", [
            "breakingNews"=>$breakingNews,
            "page"=>request('page'),
            "subCategories"=>SubCategory::with("category")->get(),
        ]);
    }

    public function update(Request $request, BreakingNews $breakingNews)
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

            if (!empty($breakingNews->thumbnail) && file_exists(public_path("storage/thumbnails/$breakingNews->thumbnail"))) {
                unlink(public_path("storage/thumbnails/$breakingNews->thumbnail"));
            }

            $extension=$request->file("thumbnail")->extension();

            $time=time();

            $finalName="post-thumbnail-$time.$extension";

            $request->file("thumbnail")->storeAs("thumbnails", $finalName);

            $postFormData["thumbnail"]=$finalName;
        }

        $postFormData["user_id"]=auth()->user()->id;

        $breakingNews->update($postFormData);

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
                $exisitngTag=Tag::where("breaking_news_id", $breakingNews->id)->where("name", $tag)->count();
                if (!$exisitngTag) {
                    $tagModel=new Tag();
                    $tagModel->breaking_news_id=$breakingNews->id;
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                }
            }
        }

        return to_route("admin.post.breaking-news.index", "page=".request("page"))->with("success", "Post is updated successfully");
    }

    public function destroy(BreakingNews $breakingNews)
    {
        if (!empty($breakingNews->thumbnail) && file_exists(public_path("storage/thumbnails/$breakingNews->thumbnail"))) {
            unlink(public_path("storage/thumbnails/$breakingNews->thumbnail"));
        }

        $breakingNews->delete();
        return to_route("admin.post.breaking-news.index", "page=".request("page"))->with("success", "Post is deleted successfully");
    }
}
