<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Butschster\Head\Facades\Meta;

class AdminDisclaimerController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Disclaimer");

        $disclaimer=Page::where("id", 6)->first();

        return view("admin.dashboard.pages.disclaimer.edit", compact("disclaimer"));
    }

    public function update(PageRequest $request)
    {
        $disclaimer=Page::where("id", 6)->first();

        $disclaimer->update($request->validated());

        return redirect()->back()->with("success", "Disclaimer page is updated successfully");
    }
}
