<?php

namespace App\Http\Controllers\Admin\Dashboard\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Validation\Rule;

class AdminSubCategoryController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.categories.sub-category.index", [
            "subCategories"=>SubCategory::with("category:id,name")->orderBy("id", "desc")->paginate(5)
        ]);
    }

    public function create()
    {
        return view("admin.dashboard.categories.sub-category.create", [
            "categories"=>Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $subCategoryFormData=$request->validate([
            "category_id"=>["required"],
            "name"=>["required",Rule::unique("sub_categories", "name")],
            "slug"=>["required",Rule::unique("sub_categories", "slug")],
            "status_on_navbar"=>["required"],
            "status_on_home"=>["required"],
        ]);

        SubCategory::create($subCategoryFormData);

        return to_route("admin.sub-category.index")->with("success", "SubCategory is added successfully");
    }

    public function edit(SubCategory $subCategory)
    {
        return view("admin.dashboard.categories.sub-category.edit", [
            "subCategory"=>$subCategory->load("category"),
            "page"=>request('page'),
            "categories"=>Category::select("id", "name")->get()
        ]);
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategoryFormData=$request->validate([
            "category_id"=>["required"],
            "name"=>["required",Rule::unique("sub_categories", "name")->ignore($subCategory->id)],
            "slug"=>["required",Rule::unique("sub_categories", "slug")->ignore($subCategory->id)],
            "status_on_navbar"=>["required"],
            "status_on_home"=>["required"],
        ]);
        $subCategory->update($subCategoryFormData);

        return to_route("admin.sub-category.index", "page=".request("page"))->with("success", "SubCategory is updated successfully");
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return to_route("admin.sub-category.index", "page=".request("page"))->with("success", "SubCategory is deleted successfully");
    }
}
