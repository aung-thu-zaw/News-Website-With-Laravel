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
        Meta::prependTitle("News Post Create");
        return view("admin.dashboard.posts.news-posts.create", [
            "subCategories"=>SubCategory::with("category")->get()
        ]);
    }

    public function store(Request $request)
    {
        $postFormData=$request->validate([
            "sub_category_id"=>["required",Rule::exists("sub_categories", "id")],
            "title"=>["required",Rule::unique("news_posts", "title")],
            "slug"=>["required",Rule::unique("news_posts", "slug")],
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

        return to_route("admin.news-posts.index")->with("success", "Post is created successfully");
    }


    public function edit(NewsPost $newsPost)
    {
        Meta::prependTitle("News Post Edit");
        return view("admin.dashboard.posts.news-posts.edit", [
            "newsPost"=>$newsPost,
            "subCategories"=>SubCategory::with("category")->get(),
            // "tag"=>Tag::where("id", $newsPost->tags->id)->get(),
            "page"=>request('page'),
        ]);
    }

    public function update(Request $request, NewsPost $newsPost)
    {
        $postFormData=$request->validate([
            "sub_category_id"=>["required",Rule::exists("sub_categories", "id")],
            "title"=>["required",Rule::unique("news_posts", "title")->ignore($newsPost->id)],
            "slug"=>["required",Rule::unique("news_posts", "slug")->ignore($newsPost->id)],
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


            // foreach ($tagsNewArray as $tag) {
            //     $countExisitngTags=Tag::where("name", $tag)->count();


            //     if (!$countExisitngTags) {
            //         $tagModel=new Tag();
            //         $tagModel->name=$tag;
            //         $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
            //         $tagModel->save();
            //         $newsPost->tags()->attach($tagModel);
            //     }
            // }
            foreach ($tagsNewArray as $tag) {
                $countExisitngTags=Tag::where("name", $tag)->count();

                $exisitngTags=Tag::where("name", $tag)->get();



                if (!$countExisitngTags) {
                    $tagModel=new Tag();
                    $tagModel->name=$tag;
                    $tagModel->slug=strtolower(str_replace(" ", "-", $tag));
                    $tagModel->save();
                    $newsPost->tags()->attach($tagModel);
                }

                foreach ($newsPost->tags as $videoExistTag) {
                    if ($videoExistTag) {
                        // $videoExistTag->tags()->attach($tag);
                        $newsPost->tags()->detach($exisitngTags);
                        // echo "hit";
                        // echo "<pre/>";
                        // echo $videoExistTag;
                    }
                }

                // die();

                if ($countExisitngTags) {
                    $newsPost->tags()->attach($exisitngTags);
                }
            }
        }

        return to_route("admin.news-posts.index", "page=".request("page"))->with("success", "Post is updated successfully");
    }

    public function destroy(NewsPost $newsPost)
    {
        if (!empty($newsPost->thumbnail) && file_exists(public_path("storage/thumbnails/$newsPost->thumbnail"))) {
            unlink(public_path("storage/thumbnails/$newsPost->thumbnail"));
        }

        $newsPost->delete();
        return to_route("admin.news-posts.index", "page=".request("page"))->with("success", "Post is deleted successfully");
    }
}
