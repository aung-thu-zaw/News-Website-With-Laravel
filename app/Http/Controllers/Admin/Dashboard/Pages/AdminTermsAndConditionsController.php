<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminTermsAndConditionsController extends Controller
{
    public function show()
    {
        return view("admin.dashboard.pages.terms-and-conditions.show", [
            "termsAndConditions"=>Page::where("id", 4)->first()
        ]);
    }

    public function update(Request $request)
    {
        $termsAndConditions=Page::where("id", 4)->first();
        $termsAndConditionsFormData=$request->validate([
            "title"=>["required"],
            "detail"=>["required"],
            "status"=>["required"],
        ]);

        $termsAndConditions->update($termsAndConditionsFormData);

        return redirect()->back()->with("success", "Terms and Conditions page is updated successfully");
    }
}
