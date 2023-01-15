<?php

namespace App\Http\Controllers\Admin\Dashboard\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrendingVideoRequest;
use App\Models\TrendingVideo;
use Butschster\Head\Facades\Meta;

class AdminTrendingVideosController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Trending Videos");

        $trendingVideos=TrendingVideo::orderBy("id", "desc")->paginate(10);

        return view("admin.dashboard.posts.trending-videos.index", compact("trendingVideos"));
    }

    public function create()
    {
        Meta::prependTitle("Trending Video Create");

        return view("admin.dashboard.posts.trending-videos.create");
    }

    public function store(TrendingVideoRequest $request)
    {
        TrendingVideo::create($request->validated());

        return to_route("admin.trending-videos.index")->with("success", "Video is created successfully");
    }

    public function edit(TrendingVideo $trendingVideo)
    {
        Meta::prependTitle("Trending Video Edit");

        $page=request('page');

        return view("admin.dashboard.posts.trending-videos.edit", compact("trendingVideo", "page"));
    }

    public function update(TrendingVideoRequest $request, TrendingVideo $trendingVideo)
    {
        $trendingVideo->update($request->validated());

        return to_route("admin.trending-videos.index", "page=".request("page"))->with("success", "Video is updated successfully");
    }

    public function destroy(TrendingVideo $trendingVideo)
    {
        $trendingVideo->delete();

        return to_route("admin.trending-videos.index", "page=".request("page"))->with("success", "Video is deleted successfully");
    }
}
