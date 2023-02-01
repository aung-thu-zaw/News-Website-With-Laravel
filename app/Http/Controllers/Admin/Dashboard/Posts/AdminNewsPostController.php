<?php

namespace App\Http\Controllers\Admin\Dashboard\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsPostRequest;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Services\NewsPostService;
use App\Services\TagService;
use Butschster\Head\Facades\Meta;

class AdminNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("News Post");

        $newsPosts=NewsPost::where("user_id", 1)
                   ->filterRequest(request(["search"]))
                   ->orderBy("id", "desc")
                   ->paginate(10)
                   ->withQueryString();

        $newsPosts->load("subCategory", "author");

        return view("admin.dashboard.posts.news-posts.index", compact("newsPosts"));
    }

    public function create()
    {
        Meta::prependTitle("News Post Create");

        $subCategories=SubCategory::with("category")->get();

        return view("admin.dashboard.posts.news-posts.create", compact("subCategories"));
    }

    public function store(NewsPostRequest $request, NewsPostService $newsPostService, TagService $tagService)
    {
        $thumbnail=$newsPostService->uploadThumbnail($request);

        $post= NewsPost::create($request->validated()+["user_id"=>auth()->user()->id,"thumbnail"=>$thumbnail]);

        $tagService->createTag($request, $post);

        return to_route("admin.news-posts.index")->with("success", "Post is created successfully");
    }

    public function edit(NewsPost $newsPost)
    {
        Meta::prependTitle("News Post Edit");

        $subCategories=SubCategory::with("category")->get();

        $page=request('page');

        return view("admin.dashboard.posts.news-posts.edit", compact("newsPost", "subCategories", "page"));
    }

    public function update(NewsPostRequest $request, NewsPost $newsPost, NewsPostService $newsPostService, TagService $tagService)
    {
        $thumbnail=$newsPostService->updateThumbnail($request, $newsPost);

        $newsPost->update($request->validated()+["thumbnail"=>$thumbnail]);

        $tagService->updateNewsPostTag($request, $newsPost);

        return to_route("admin.news-posts.index", "page=".request("page"))->with("success", "Post is updated successfully");
    }

    public function destroy(NewsPost $newsPost)
    {
        NewsPost::deleteThumbnail($newsPost);

        $newsPost->delete();

        return to_route("admin.news-posts.index", "page=".request("page"))->with("success", "Post is deleted successfully");
    }
}
