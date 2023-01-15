<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Butschster\Head\Facades\Meta;

class AdminTermsAndConditionsController extends Controller
{
    public function edit()
    {
        Meta::prependTitle("Terms And Conditions");

        $termsAndConditions=Page::where("id", 4)->first();

        return view("admin.dashboard.pages.terms-and-conditions.edit", compact("termsAndConditions"));
    }

    public function update(PageRequest $request)
    {
        $termsAndConditions=Page::where("id", 4)->first();

        $termsAndConditions->update($request->validated());

        return redirect()->back()->with("success", "Terms and Conditions page is updated successfully");
    }
}
