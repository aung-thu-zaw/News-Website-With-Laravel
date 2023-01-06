<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminPrivacyAndPolicyController extends Controller
{
    public function show()
    {
        return view("admin.dashboard.pages.privacy-and-policy.show", [
            "privacyAndPolicy"=>Page::where("id", 5)->first()
        ]);
    }

    public function update(Request $request)
    {
        $privacyAndPolicy=Page::where("id", 5)->first();
        $privacyAndPolicyFormData=$request->validate([
            "title"=>["required"],
            "detail"=>["required"],
            "status"=>["required"],
        ]);

        $privacyAndPolicy->update($privacyAndPolicyFormData);

        return redirect()->back()->with("success", "Privacy and Policy page is updated successfully");
    }
}
