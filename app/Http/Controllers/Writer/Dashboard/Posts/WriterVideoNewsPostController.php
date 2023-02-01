<?php

namespace App\Http\Controllers\Writer\Dashboard\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WriterVideoNewsPostRequest;
use App\Models\SubCategory;
use Butschster\Head\Facades\Meta;
use App\Models\VideoNewsPost;
use App\Services\TagService;

class WriterVideoNewsPostController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Video News Posts");

        $id=auth()->user()->id;

        $videoNewsPosts=VideoNewsPost::where("user_id", $id)
                        ->filterRequest(request(["search"]))
                        ->orderBy("id", "desc")
                        ->paginate(10)
                        ->withQueryString();

        $videoNewsPosts->load("subCategory", "author");

        return view("writer.dashboard.posts.video-news-posts.index", compact("videoNewsPosts"));
    }

    public function create()
    {
        Meta::prependTitle("Video News Post Create");

        $subCategories=SubCategory::with("category")->get();

        return view("writer.dashboard.posts.video-news-posts.create", compact("subCategories"));
    }

    public function store(WriterVideoNewsPostRequest $request, TagService $tagService)
    {
        $post= VideoNewsPost::create($request->validated()+["user_id"=>auth()->user()->id]);

        $tagService->createTag($request, $post);

        return to_route("writer.video-news-posts.index")->with("success", "Video Post is created successfully");
    }

    public function edit(VideoNewsPost $videoNewsPost)
    {
        Meta::prependTitle("Video News Post Edit");

        $subCategories=SubCategory::with("category")->get();

        $page=request('page');

        return view("writer.dashboard.posts.video-news-posts.edit", compact("subCategories", "videoNewsPost", "page"));
    }

    public function update(WriterVideoNewsPostRequest $request, VideoNewsPost $videoNewsPost, TagService $tagService)
    {
        $videoNewsPost->update($request->validated());

        $tagService->updateVideoNewsTag($request, $videoNewsPost);

        return to_route("writer.video-news-posts.index", "page=".request("page"))->with("success", "Video Post is updated successfully");
    }

    public function destroy(VideoNewsPost $videoNewsPost)
    {
        $videoNewsPost->delete();

        return to_route("writer.video-news-posts.index", "page=".request("page"))->with("success", "Video Post is deleted successfully");
    }
}
