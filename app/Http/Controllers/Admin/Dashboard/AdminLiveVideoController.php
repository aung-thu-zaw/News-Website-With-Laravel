<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\LiveVideo;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminLiveVideoController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.live-videos.index", [
            "liveVideos"=>LiveVideo::orderBy("id", "desc")->paginate(10)
        ]);
    }


    public function create()
    {
        return view("admin.dashboard.live-videos.create");
    }


    public function store(Request $request)
    {
        $videoFormData=$request->validate([
            "video_id"=>["required"],
            "title"=>["required"],
         ]);
        LiveVideo::create($videoFormData);

        return to_route("admin.live-videos.index")->with("success", "Live Video is created successfully");
    }


    public function edit(LiveVideo $liveVideo)
    {
        Meta::prependTitle("Trending Video Edit");
        return view("admin.dashboard.live-videos.edit", [
            "liveVideo"=>$liveVideo,
            "page"=>request('page'),
        ]);
    }

    public function update(Request $request, LiveVideo $liveVideo)
    {
        $videoFormData=$request->validate([
            "video_id"=>["required"],
            "title"=>["required"],
         ]);

        $liveVideo->update($videoFormData);

        return to_route("admin.live-videos.index", "page=".request("page"))->with("success", "Live Video is updated successfully");
    }


    public function destroy(LiveVideo $liveVideo)
    {
        $liveVideo->delete();
        return to_route("admin.live-videos.index", "page=".request("page"))->with("success", "Live Video is deleted successfully");
    }
}
