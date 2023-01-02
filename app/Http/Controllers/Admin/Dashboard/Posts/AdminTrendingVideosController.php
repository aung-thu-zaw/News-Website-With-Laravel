<?php

namespace App\Http\Controllers\Admin\Dashboard\Posts;

use App\Http\Controllers\Controller;
use App\Models\TrendingVideo;
use Illuminate\Http\Request;

class AdminTrendingVideosController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.posts.trending-videos.index", [
            "trendingVideos"=>TrendingVideo::orderBy("id", "desc")->paginate(10)
        ]);
    }


    public function create()
    {
        return view("admin.dashboard.posts.trending-videos.create");
    }


    public function store(Request $request)
    {
        $videoFormData=$request->validate([
            "video_id"=>["required"],
            "owner"=>["required"],
            "caption"=>["required"]
         ]);
        TrendingVideo::create($videoFormData);

        return to_route("admin.video-gallery.index")->with("success", "Video is created successfully");
    }



    public function edit(TrendingVideo $trendingVideo)
    {
        return view("admin.dashboard.posts.trending-videos.edit", [
            "trendingVideo"=>$trendingVideo,
            "page"=>request('page'),
        ]);
    }


    public function update(Request $request, TrendingVideo $trendingVideo)
    {
        $videoFormData=$request->validate([
            "video_id"=>["required"],
            "owner"=>["required"],
            "caption"=>["required"]
         ]);

        $trendingVideo->update($videoFormData);

        return to_route("admin.video-gallery.index", "page=".request("page"))->with("success", "Video is updated successfully");
    }


    public function destroy(TrendingVideo $trendingVideo)
    {
        $trendingVideo->delete();
        return to_route("admin.video-gallery.index", "page=".request("page"))->with("success", "Video is deleted successfully");
    }
}
