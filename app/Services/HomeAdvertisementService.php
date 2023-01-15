<?php

namespace App\Services;

use App\Models\HomeAdvertisement;
use Illuminate\Http\Request;

class HomeAdvertisementService
{
    public function uploadTopAdvertisementPhoto(Request $request, $homeAdvertisement): ?string
    {
        if ($request->hasFile("top_advertisement_photo")) {
            $request->validate([
                    "top_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            HomeAdvertisement::deleteTopAdvertisementPhoto($homeAdvertisement);

            $extension=$request->file("top_advertisement_photo")->extension();

            $finalName="home-top-advertisement-photo.$extension";

            $request->file("top_advertisement_photo")->storeAs("advertisements", $finalName);

            return $finalName;
        }

        return $homeAdvertisement->top_advertisement_photo;
    }

    public function uploadMiddleAdvertisementPhoto(Request $request, $homeAdvertisement): ?string
    {
        if ($request->hasFile("middle_advertisement_photo")) {
            $request->validate([
                    "middle_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            HomeAdvertisement::deleteMiddleAdvertisementPhoto($homeAdvertisement);

            $extension=$request->file("middle_advertisement_photo")->extension();

            $finalName="home-middle-advertisement-photo.$extension";

            $request->file("middle_advertisement_photo")->storeAs("advertisements", $finalName);

            return $finalName;
        }

        return $homeAdvertisement->middle_advertisement_photo;
    }

    public function uploadBottomAdvertisementPhoto(Request $request, $homeAdvertisement): ?string
    {
        if ($request->hasFile("bottom_advertisement_photo")) {
            $request->validate([
                    "bottom_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            HomeAdvertisement::deleteBottomAdvertisementPhoto($homeAdvertisement);

            $extension=$request->file("bottom_advertisement_photo")->extension();

            $finalName="home-bottom-advertisement-photo.$extension";

            $request->file("bottom_advertisement_photo")->storeAs("advertisements", $finalName);

            return $finalName;
        }

        return $homeAdvertisement->bottom_advertisement_photo;
    }
}
