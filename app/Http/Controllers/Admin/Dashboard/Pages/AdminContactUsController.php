<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminContactUsController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Contact Us");

        $contactUs=Page::where("id", 3)->first();

        return view("admin.dashboard.pages.contact-us.edit", compact("contactUs"));
    }

    public function update(PageRequest $request)
    {
        $contactUs=Page::where("id", 3)->first();

        $contactUs->update($request->validated());

        return redirect()->back()->with("success", "Contact us page is updated successfully");
    }
}
