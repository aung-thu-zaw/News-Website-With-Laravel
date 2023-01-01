<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function index()
    {
        return view("galleries.video-gallery.index", [
            "videos"=>Video::orderBy("id", "desc")->get()
        ]);
    }
}
