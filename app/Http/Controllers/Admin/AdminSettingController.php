<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminSettingController extends Controller
{
    public function show()
    {
        Meta::prependTitle("Setting");
        return view("admin.dashboard.setting.show", [
            "setting"=>Setting::where("id", 1)->first()
        ]);
    }


    public function update(Request $request)
    {
        $setting=Setting::where("id", 1)->first();

        $settingFormData=$request->validate([
            "favicon"=>["nullable"],
            "logo"=>["nullable"],
        ]);

        if ($request->hasFile("favicon")) {
            $settingFormData=$request->validate([
                "favicon"=>["required","mimes:png,jpg,jpeg,webp"],
            ]);

            if (!empty($setting->favicon) && file_exists(public_path("storage/website/$setting->favicon"))) {
                unlink(public_path("storage/website/$setting->favicon"));
            }

            $extension=$request->file("favicon")->extension();
            $finalName="favicon.$extension";
            $request->file("favicon")->storeAs("website", $finalName);
            $settingFormData["favicon"]=$finalName;

            $setting->update($settingFormData);
        }

        if ($request->hasFile("logo")) {
            $settingFormData=$request->validate([
                "logo"=>["required","mimes:png,jpg,jpeg,webp"],
            ]);

            if (!empty($setting->logo) && file_exists(public_path("storage/website/$setting->logo"))) {
                unlink(public_path("storage/website/$setting->logo"));
            }

            $extension=$request->file("logo")->extension();
            $finalName="logo.$extension";
            $request->file("logo")->storeAs("website", $finalName);
            $settingFormData["logo"]=$finalName;

            $setting->update($settingFormData);
        }

        return redirect()->back()->with("success", "Favicon And Logo are updated successfully");
    }
}
