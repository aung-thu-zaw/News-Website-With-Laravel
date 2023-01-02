<?php

namespace App\Http\Controllers\Galleries;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Photos");
        return view("galleries.photo-gallery.index", [
            "photos"=>Photo::orderBy("id", "desc")->get()
        ]);
    }
}
