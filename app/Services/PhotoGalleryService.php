<?php

namespace App\Services;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryService
{
    public function uploadPhoto(Request $request): ?string
    {
        if ($request->hasFile("photo")) {
            $request->validate([
            "photo"=>["required","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            $extension=$request->file("photo")->extension();

            $time=time();

            $finalName="photo-$time.$extension";

            $request->file("photo")->storeAs("photo-gallery", $finalName);

            return $finalName;
        } else {
            return null;
        }
    }

    public function createPhoto(array $photoData): PhotoGallery
    {
        return PhotoGallery::create([
            "language_id"=>$photoData["language_id"],
            "photo"=>$photoData["photo"],
            "owner"=>$photoData["owner"],
            "caption"=>$photoData["caption"],
        ]);
    }


    public function updatePhoto(Request $request, $photoGallery): ?string
    {
        if ($request->hasFile("photo")) {
            $request->validate([
            "photo"=>["required","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            PhotoGallery::deletePhoto($photoGallery);

            $extension=$request->file("photo")->extension();

            $time=time();

            $finalName="photo-$time.$extension";

            $request->file("photo")->storeAs("photo-gallery", $finalName);

            return $finalName;
        } else {
            return $photoGallery->photo;
        }
    }
}
