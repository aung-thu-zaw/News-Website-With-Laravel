<?php

namespace App\Http\Controllers\Admin\Dashboard\Galleries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Butschster\Head\Facades\Meta;

class AdminPhotoGalleryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Photo Gallery");

        return view("admin.dashboard.galleries.photo-gallery.index", [
            "photos"=>Photo::orderBy("id", "desc")->paginate(10)
        ]);
    }


    public function create()
    {
        Meta::prependTitle("Photo Create");

        return view("admin.dashboard.galleries.photo-gallery.create");
    }

    public function store(Request $request)
    {
        $photoFormData=$request->validate([
           "photo"=>["required","mimes:png,jpg,jpeg,gif,webp"],
           "owner"=>["required"],
           "caption"=>["required"]
        ]);

        $extension=$request->file("photo")->extension();

        $time=time();

        $finalName="photo-$time.$extension";

        $request->file("photo")->storeAs("photo-gallery", $finalName);

        $photoFormData["photo"]=$finalName;

        Photo::create($photoFormData);

        return to_route("admin.photos.index")->with("success", "Photo is created successfully");
    }

    public function edit(Photo $Photo)
    {
        Meta::prependTitle("Photo Edit");

        return view("admin.dashboard.galleries.photo-gallery.edit", [
            "photo"=>$Photo,
            "page"=>request('page'),
        ]);
    }

    public function update(Request $request, Photo $photo)
    {
        $photoFormData=$request->validate([
            "owner"=>["required"],
            "caption"=>["required"]
         ]);


        if ($request->hasFile("photo")) {
            $request->validate([
                "photo"=>["required","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            if (!empty($photo->photo) && file_exists(public_path("storage/photo-gallery/$photo->photo"))) {
                unlink(public_path("storage/photo-gallery/$photo->photo"));
            }

            $extension=$request->file("photo")->extension();

            $time=time();

            $finalName="photo-$time.$extension";

            $request->file("photo")->storeAs("photo-gallery", $finalName);

            $photoFormData["photo"]=$finalName;
        }

        $photo->update($photoFormData);

        return to_route("admin.photos.index", "page=".request("page"))->with("success", "Photo is updated successfully");
    }


    public function destroy(Photo $photo)
    {
        if (!empty($photo->photo) && file_exists(public_path("storage/photo-gallery/$photo->photo"))) {
            unlink(public_path("storage/photo-gallery/$photo->photo"));
        }
        $photo->delete();
        return to_route("admin.photos.index", "page=".request("page"))->with("success", "Photo is deleted successfully");
    }
}
