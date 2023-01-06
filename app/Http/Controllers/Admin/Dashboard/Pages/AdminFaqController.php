<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function show()
    {
        return view("admin.dashboard.pages.faq.show", [
            "faq"=>Page::where("id", 2)->first()
        ]);
    }

    public function update(Request $request)
    {
        $faq=Page::where("id", 2)->first();
        $faqFormData=$request->validate([
            "title"=>["required"],
            "detail"=>["required"],
            "status"=>["required"],
        ]);

        $faq->update($faqFormData);

        return redirect()->back()->with("success", "FAQ page is updated successfully");
    }
}
