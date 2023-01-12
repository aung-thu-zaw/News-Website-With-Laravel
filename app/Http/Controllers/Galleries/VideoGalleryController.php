<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class VideoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Videos");

        return view("galleries.video-gallery.index", [
            "videos"=>Video::orderBy("id", "desc")->get()
        ]);
    }
}
