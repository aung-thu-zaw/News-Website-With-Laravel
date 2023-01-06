<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminDisclaimerController extends Controller
{
    public function show()
    {
        return view("admin.dashboard.pages.disclaimer.show", [
            "disclaimer"=>Page::where("id", 6)->first()
        ]);
    }

    public function update(Request $request)
    {
        $disclaimer=Page::where("id", 6)->first();
        $disclaimerFormData=$request->validate([
            "title"=>["required"],
            "detail"=>["required"],
            "status"=>["required"],
        ]);

        $disclaimer->update($disclaimerFormData);

        return redirect()->back()->with("success", "Disclaimer page is updated successfully");
    }
}
