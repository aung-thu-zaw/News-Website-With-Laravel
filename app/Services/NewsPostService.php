<?php

namespace App\Services;

use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewsPostService
{
    public function uploadThumbnail(Request $request): ?string
    {
        if ($request->hasFile("thumbnail")) {
            $request->validate([
                "thumbnail"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            $extension=$request->file("thumbnail")->extension();

            $time=time();

            $finalName="post-thumbnail-$time.$extension";

            $request->file("thumbnail")->storeAs("thumbnails", $finalName);

            return $finalName;
        } else {
            return null;
        }
    }

    public function updateThumbnail(Request $request, $newsPost): ?string
    {
        if ($request->hasFile("thumbnail")) {
            $request->validate([
                "thumbnail"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            NewsPost::deleteThumbnail($newsPost);

            $extension=$request->file("thumbnail")->extension();

            $time=time();

            $finalName="post-thumbnail-$time.$extension";

            $request->file("thumbnail")->storeAs("thumbnails", $finalName);

            return $finalName;
        } else {
            return $newsPost->thumbnail;
        }
    }
}
