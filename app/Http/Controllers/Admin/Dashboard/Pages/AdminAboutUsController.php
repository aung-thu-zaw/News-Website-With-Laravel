<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Butschster\Head\Facades\Meta;

class AdminAboutUsController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("About Us");

        $aboutUs=Page::where("id", 1)->first();

        return view("admin.dashboard.pages.about-us.edit", compact("aboutUs"));
    }

    public function update(PageRequest $request)
    {
        $aboutus=Page::where("id", 1)->first();

        $aboutus->update($request->validated());

        return redirect()->back()->with("success", "About us page is updated successfully");
    }
}
