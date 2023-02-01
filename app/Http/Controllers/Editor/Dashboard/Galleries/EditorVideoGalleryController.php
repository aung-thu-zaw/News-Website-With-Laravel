<?php

namespace App\Http\Controllers\Editor\Dashboard\Galleries;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoGalleryRequest;
use App\Models\VideoGallery;
use Butschster\Head\Facades\Meta;

class EditorVideoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Video Gallery");

        $videos=VideoGallery::search(request("search"))
                ->paginate(10)
                ->withQueryString();

        return view("editor.dashboard.galleries.video-gallery.index", compact("videos"));
    }

    public function create()
    {
        Meta::prependTitle("Video Create");

        return view("editor.dashboard.galleries.video-gallery.create");
    }


    public function store(VideoGalleryRequest $request)
    {
        VideoGallery::create($request->validated());

        return to_route("editor.video-gallery.index")->with("success", "Video is created successfully");
    }

    public function edit(VideoGallery $videoGallery)
    {
        Meta::prependTitle("Video Edit");

        $page=request('page');

        return view("editor.dashboard.galleries.video-gallery.edit", compact("videoGallery", "page"));
    }

    public function update(VideoGalleryRequest $request, VideoGallery $videoGallery)
    {
        $videoGallery->update($request->validated());

        return to_route("editor.video-gallery.index", "page=".request("page"))->with("success", "Video is updated successfully");
    }

    public function destroy(VideoGallery $videoGallery)
    {
        $videoGallery->delete();

        return to_route("editor.video-gallery.index", "page=".request("page"))->with("success", "Video is deleted successfully");
    }
}
