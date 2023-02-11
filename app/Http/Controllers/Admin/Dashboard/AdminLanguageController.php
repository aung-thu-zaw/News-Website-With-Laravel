<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AdminLanguageController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Languages");

        $languages=Language::search(request("search"))->paginate(10);

        return view("admin.dashboard.languages.index", compact("languages"));
    }

    public function create()
    {
        Meta::prependTitle("Language Create");

        return view("admin.dashboard.languages.create");
    }

    public function store(LanguageRequest $request)
    {
        if ($request->is_default=="yes") {
            DB::table('languages')->update(["is_default"=>"no"]);
        }

        Language::create($request->validated());

        $copyData=file_get_contents(resource_path("lang/sample.json"));

        file_put_contents(resource_path('lang/'.$request->short_name.'.json'), $copyData);

        return to_route("admin.languages.index")->with("success", "Language is created successfully");
    }


    public function edit(Language $language)
    {
        Meta::prependTitle("Language Edit");

        $page=request('page');

        return view("admin.dashboard.languages.edit", compact("language", "page"));
    }

    public function update(LanguageRequest $request, Language $language)
    {
        if ($request->is_default=="yes") {
            DB::table('languages')->update(["is_default"=>"no"]);
        }

        $language->update($request->validated());

        return to_route("admin.languages.index", "page=".request("page"))->with("success", "Language is updated successfully");
    }

    public function destroy(Language $language)
    {
        if ($language->is_default=="yes") {
            DB::table('languages')->where("id", 1)->update(["is_default"=>"yes"]);
        }

        unlink(resource_path("lang/$language->short_name.json"));

        $language->delete();

        return to_route("admin.languages.index", "page=".request("page"))->with("success", "Language is deleted successfully");
    }

    public function handleUpdateDetail(Language $language)
    {
        Meta::prependTitle("Language Update Detail");

        $jsonData=json_decode(file_get_contents(resource_path("lang/$language->short_name.json")));

        return view("admin.dashboard.languages.update-detail", compact("jsonData", "language"));
    }

    public function updateDetailUpdate(Request $request, Language $language)
    {
        $arr1=[];
        $arr2=[];

        foreach ($request->key as $value) {
            $arr1[]=$value;
        }

        foreach ($request->value as $value) {
            $arr2[]=$value;
        }


        for ($i=0;$i<count($arr1);$i++) {
            $data[$arr1[$i]]=$arr2[$i];
        }


        $encodeJson=json_encode($data, JSON_PRETTY_PRINT);

        file_put_contents(resource_path("lang/$language->short_name.json"), $encodeJson);

        return to_route("admin.languages.index")->with("success", "Language Details is updated successfully");
    }
}
