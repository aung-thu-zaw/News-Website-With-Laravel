<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Language;
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

        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;

        $videos= VideoGallery::where("language_id", $currentLanguageId)->orderBy("id", "desc")->get();

        return view("galleries.video-gallery.index", compact("videos"));
    }
}
