<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Services\SettingService;

class AdminSettingController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Setting");

        $setting=Setting::where("id", 1)->first();

        return view("admin.dashboard.setting.edit", compact("setting"));
    }

    public function update(Request $request, SettingService $settingService)
    {
        $setting=Setting::where("id", 1)->first();

        $favicon=$settingService->uploadFavicon($request, $setting) ?? $setting->favicon;

        $logo=$settingService->uploadLogo($request, $setting) ?? $setting->logo;

        $setting->update(
            [
                "favicon"=>$favicon,
                "logo"=>$logo,
            ]
        );

        return redirect()->back()->with("success", "Favicon And Logo are updated successfully");
    }
}
