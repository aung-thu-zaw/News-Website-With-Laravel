<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class VideoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Videos");

        LanguageHelper::readJson();

        $videos= VideoGallery::orderBy("id", "desc")->get();

        return view("galleries.video-gallery.index", compact("videos"));
    }
}
