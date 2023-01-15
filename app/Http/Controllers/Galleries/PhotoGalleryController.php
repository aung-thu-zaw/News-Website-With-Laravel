<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Photos");

        $photos=PhotoGallery::orderBy("id", "desc")->get();

        return view("galleries.photo-gallery.index", compact("photos"));
    }
}
