<?php

namespace App\Services;

use Illuminate\Http\Request;

class SettingService
{
    public function uploadFavicon(Request $request, $setting): ?string
    {
        if ($request->hasFile("favicon")) {
            $request->validate([
                   "favicon"=>["required","mimes:png,jpg,jpeg,webp"],
               ]);

            if (!empty($setting->favicon) && file_exists(public_path("storage/website/$setting->favicon"))) {
                unlink(public_path("storage/website/$setting->favicon"));
            }

            $extension=$request->file("favicon")->extension();
            $finalName="favicon.$extension";
            $request->file("favicon")->storeAs("website", $finalName);


            return $finalName;
        }

        return $setting->favicon;
    }


    public function uploadLogo(Request $request, $setting): ?string
    {
        if ($request->hasFile("logo")) {
            $request->validate([
                    "logo"=>["required","mimes:png,jpg,jpeg,webp"],
                ]);

            if (!empty($setting->logo) && file_exists(public_path("storage/website/$setting->logo"))) {
                unlink(public_path("storage/website/$setting->logo"));
            }

            $extension=$request->file("logo")->extension();
            $finalName="logo.$extension";
            $request->file("logo")->storeAs("website", $finalName);

            return $finalName;
        }
        return $setting->logo;
    }
}
