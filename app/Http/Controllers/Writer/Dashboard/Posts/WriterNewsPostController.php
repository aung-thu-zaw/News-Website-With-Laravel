<?php

namespace App\Http\Controllers\Writer\Dashboard\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\WriterNewsPostRequest;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Services\NewsPostService;
use App\Services\TagService;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class WriterNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("News Post");

        $id=auth()->user()->id;

        $newsPosts=NewsPost::where("user_id", $id)
                   ->filterRequest(request(["search"]))
                   ->orderBy("id", "desc")
                   ->paginate(10)
                   ->withQueryString();

        $newsPosts->load("subCategory", "author");

        return view("writer.dashboard.posts.news-posts.index", compact("newsPosts"));
    }

    public function create()
    {
        Meta::prependTitle("News Post Create");

        $subCategories=SubCategory::with("category")->get();

        return view("writer.dashboard.posts.news-posts.create", compact("subCategories"));
    }

    public function store(WriterNewsPostRequest $request, NewsPostService $newsPostService, TagService $tagService)
    {
        $thumbnail=$newsPostService->uploadThumbnail($request);

        $post= NewsPost::create($request->validated()+["user_id"=>auth()->user()->id,"thumbnail"=>$thumbnail]);

        $tagService->createTag($request, $post);

        return to_route("writer.news-posts.index")->with("success", "Post is created successfully");
    }

    public function edit(NewsPost $newsPost)
    {
        Meta::prependTitle("News Post Edit");

        $subCategories=SubCategory::with("category")->get();

        $page=request('page');

        return view("writer.dashboard.posts.news-posts.edit", compact("newsPost", "subCategories", "page"));
    }

    public function update(WriterNewsPostRequest $request, NewsPost $newsPost, NewsPostService $newsPostService, TagService $tagService)
    {
        $thumbnail=$newsPostService->updateThumbnail($request, $newsPost);

        $newsPost->update($request->validated()+["thumbnail"=>$thumbnail]);

        $tagService->updateNewsPostTag($request, $newsPost);

        return to_route("writer.news-posts.index", "page=".request("page"))->with("success", "Post is updated successfully");
    }

    public function destroy(NewsPost $newsPost)
    {
        NewsPost::deleteThumbnail($newsPost);

        $newsPost->delete();

        return to_route("writer.news-posts.index", "page=".request("page"))->with("success", "Post is deleted successfully");
    }
}
