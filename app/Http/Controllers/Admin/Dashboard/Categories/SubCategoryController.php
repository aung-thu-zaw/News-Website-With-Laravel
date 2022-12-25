<?php

namespace App\Http\Controllers\Admin\Dashboard\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view("dashboard.categories.sub-category.index", [
            "subCategories"=>SubCategory::with("category")->orderBy("id", "desc")->paginate(5)
        ]);
    }

    public function create()
    {
        return view("dashboard.categories.sub-category.create", [
            "categories"=>Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $subCategoryFormData=$request->validate([
            "category_id"=>["required",Rule::unique("categories", "name")],
            "name"=>["required",Rule::unique("sub_categories", "name")],
            "slug"=>["required",Rule::unique("sub_categories", "slug")],
            "status_on_navbar"=>["required"],
            "status_on_home"=>["required"],
        ]);

        SubCategory::create($subCategoryFormData);

        return to_route("admin.sub-category")->with("success", "SubCategory is added successfully");
    }

    public function edit(SubCategory $subCategory)
    {
        return view("dashboard.categories.sub-category.edit", [
            "subCategory"=>$subCategory,
            "categories"=>Category::all()
        ]);
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategoryFormData=$request->validate([
            "category_id"=>["required",Rule::unique("categories", "name")],
            "name"=>["required",Rule::unique("sub_categories", "name")->ignore($subCategory->id)],
            "slug"=>["required",Rule::unique("sub_categories", "slug")->ignore($subCategory->id)],
            "status_on_navbar"=>["required"],
            "status_on_home"=>["required"],
        ]);

        $subCategory->update($subCategoryFormData);

        return to_route("admin.sub-category")->with("success", "SubCategory is updated successfully");
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return to_route("admin.sub-category")->with("success", "SubCategory is deleted successfully");
    }
}
