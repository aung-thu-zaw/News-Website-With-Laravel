<?php

namespace App\Http\Controllers\Admin\Dashboard\Pages;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqAccordionController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.pages.faq-accordion.index", [
            "faqAccordions"=>Faq::orderBy("id", "desc")->paginate(10)
        ]);
    }

    public function create()
    {
        return view("admin.dashboard.pages.faq-accordion.create");
    }

    public function store(Request $request)
    {
        $faqFormData=$request->validate([
            "question"=>"required",
            "answer"=>"required"
        ]);

        Faq::create($faqFormData);

        return to_route("admin.faq-accordion.index")->with("success", "FAQ is created successfully");
    }

    public function edit($id)
    {
        $faq=Faq::where("id", $id)->first();

        return view("admin.dashboard.pages.faq-accordion.edit", [
            "faqAccordion"=>$faq,
            "page"=>request('page'),
        ]);
    }


    public function update(Request $request, $id)
    {
        $faq=Faq::where("id", $id)->first();
        $faqFormData=$request->validate([
            "question"=>"required",
            "answer"=>"required"
        ]);

        $faq->update($faqFormData);

        return to_route("admin.faq-accordion.index")->with("success", "FAQ is updated successfully");
    }

    public function destroy($id)
    {
        $faq=Faq::where("id", $id)->first();

        $faq->delete();
        return to_route("admin.faq-accordion.index", "page=".request("page"))->with("success", "FAQ is deleted successfully");
    }
}
