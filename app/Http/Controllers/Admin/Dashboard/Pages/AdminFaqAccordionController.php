<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqAccordionRequest;
use App\Models\Faq;
use Butschster\Head\Facades\Meta;

class AdminFaqAccordionController extends Controller
{
    public function index()
    {
        Meta::prependTitle("FAQ Accordions");

        $faqAccordions=Faq::orderBy("id", "desc")->paginate(10);

        return view("admin.dashboard.pages.faq-accordion.index", compact("faqAccordions"));
    }

    public function create()
    {
        Meta::prependTitle("FAQ Accordion Create");

        return view("admin.dashboard.pages.faq-accordion.create");
    }

    public function store(FaqAccordionRequest $request)
    {
        Faq::create($request->validated());

        return to_route("admin.faq-accordion.index")->with("success", "FAQ is created successfully");
    }

    public function edit($id)
    {
        Meta::prependTitle("FAQ Accordion Edit");

        $faqAccordion=Faq::where("id", $id)->first();

        $page=request('page');

        return view("admin.dashboard.pages.faq-accordion.edit", compact("faqAccordion", "page"));
    }

    public function update(FaqAccordionRequest $request, $id)
    {
        $faq=Faq::where("id", $id)->first();

        $faq->update($request->validated());

        return to_route("admin.faq-accordion.index")->with("success", "FAQ is updated successfully");
    }

    public function destroy($id)
    {
        $faq=Faq::where("id", $id)->first();

        $faq->delete();

        return to_route("admin.faq-accordion.index", "page=".request("page"))->with("success", "FAQ is deleted successfully");
    }
}
