<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LiveVideoRequest;
use App\Models\LiveVideo;
use Butschster\Head\Facades\Meta;

class AdminLiveVideoController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Live Videos");

        $liveVideos=LiveVideo::orderBy("id", "desc")->paginate(10);

        return view("admin.dashboard.live-videos.index", compact("liveVideos"));
    }

    public function create()
    {
        Meta::prependTitle("Live Video Create");

        return view("admin.dashboard.live-videos.create");
    }

    public function store(LiveVideoRequest $request)
    {
        LiveVideo::create($request->validated());

        return to_route("admin.live-videos.index")->with("success", "Live Video is created successfully");
    }

    public function edit(LiveVideo $liveVideo)
    {
        Meta::prependTitle("Live Video Edit");

        $page=request('page');

        return view("admin.dashboard.live-videos.edit", compact("liveVideo", "page"));
    }

    public function update(LiveVideoRequest $request, LiveVideo $liveVideo)
    {
        $liveVideo->update($request->validated());

        return to_route("admin.live-videos.index", "page=".request("page"))->with("success", "Live Video is updated successfully");
    }


    public function destroy(LiveVideo $liveVideo)
    {
        $liveVideo->delete();

        return to_route("admin.live-videos.index", "page=".request("page"))->with("success", "Live Video is deleted successfully");
    }
}
