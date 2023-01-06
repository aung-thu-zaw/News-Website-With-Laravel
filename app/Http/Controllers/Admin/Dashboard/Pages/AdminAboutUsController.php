<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{
    public function show()
    {
        return view("admin.dashboard.pages.about-us.show", [
            "aboutUs"=>Page::where("id", 1)->first()
        ]);
    }

    public function update(Request $request)
    {
        $aboutus=Page::where("id", 1)->first();
        $aboutUsFormData=$request->validate([
            "title"=>["required"],
            "detail"=>["required"],
            "status"=>["required"],
        ]);

        $aboutus->update($aboutUsFormData);

        return redirect()->back()->with("success", "About us page is updated successfully");
    }
}
