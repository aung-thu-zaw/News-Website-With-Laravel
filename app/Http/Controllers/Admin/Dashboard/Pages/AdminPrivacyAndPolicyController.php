<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminPrivacyAndPolicyController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Privacy And Policy");

        $privacyAndPolicy=Page::where("id", 5)->first();

        return view("admin.dashboard.pages.privacy-and-policy.edit", compact("privacyAndPolicy"));
    }

    public function update(PageRequest $request)
    {
        $privacyAndPolicy=Page::where("id", 5)->first();

        $privacyAndPolicy->update($request->validated());

        return redirect()->back()->with("success", "Privacy and Policy page is updated successfully");
    }
}
