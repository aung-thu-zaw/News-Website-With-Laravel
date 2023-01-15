<?php

namespace App\Services;

use App\Models\SidebarAdvertisement;
use Illuminate\Http\Request;

class SidebarAdvertisementService
{
    public function uploadTopAdvertisementPhoto(Request $request, $sidebarAdvertisement): ?string
    {
        if ($request->hasFile("top_advertisement_photo")) {
            $request->validate([
                    "top_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            SidebarAdvertisement::deleteTopAdvertisementPhoto($sidebarAdvertisement);

            $extension=$request->file("top_advertisement_photo")->extension();

            $finalName="sidebar-top-advertisement-photo.$extension";

            $request->file("top_advertisement_photo")->storeAs("advertisements", $finalName);

            return $finalName;
        }

        return $sidebarAdvertisement->top_advertisement_photo;
    }


    public function uploadBottomAdvertisementPhoto(Request $request, $sidebarAdvertisement): ?string
    {
        if ($request->hasFile("bottom_advertisement_photo")) {
            $request->validate([
                    "bottom_advertisement_photo"=>["required","image","mimes:png,jpg,jpeg,gif,webp"],
            ]);

            SidebarAdvertisement::deleteBottomAdvertisementPhoto($sidebarAdvertisement);

            $extension=$request->file("bottom_advertisement_photo")->extension();

            $finalName="sidebar-bottom-advertisement-photo.$extension";

            $request->file("bottom_advertisement_photo")->storeAs("advertisements", $finalName);

            return $finalName;
        }

        return $sidebarAdvertisement->bottom_advertisement_photo;
    }
}
