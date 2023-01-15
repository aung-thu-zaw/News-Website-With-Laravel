<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Butschster\Head\Facades\Meta;

class AdminFaqController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("FAQ");

        $faq=Page::where("id", 2)->first();

        return view("admin.dashboard.pages.faq.edit", compact("faq"));
    }

    public function update(PageRequest $request)
    {
        $faq=Page::where("id", 2)->first();

        $faq->update($request->validated());

        return redirect()->back()->with("success", "FAQ page is updated successfully");
    }
}
