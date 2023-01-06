<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function show()
    {
        return view("admin.dashboard.pages.contact-us.show", [
            "contactUs"=>Page::where("id", 3)->first()
        ]);
    }

    public function update(Request $request)
    {
        $contactUs=Page::where("id", 3)->first();
        $contactUsFormData=$request->validate([
            "title"=>["required"],
            "detail"=>["required"],
            "status"=>["required"],
            "map"=>["nullable"]
        ]);

        $contactUs->update($contactUsFormData);

        return redirect()->back()->with("success", "Contact us page is updated successfully");
    }
}
