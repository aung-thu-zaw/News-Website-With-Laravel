<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Photo;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Photos");

        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;

        LanguageHelper::readJson();

        $photos=PhotoGallery::where("language_id", $currentLanguageId)->orderBy("id", "desc")->get();

        return view("galleries.photo-gallery.index", compact("photos"));
    }
}
