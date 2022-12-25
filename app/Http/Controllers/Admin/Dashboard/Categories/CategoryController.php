<?php

namespace App\Http\Controllers\Admin\Dashboard\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        return view("dashboard.categories.category.index", [
            "categories"=>Category::orderBy("id", "desc")->paginate(10)
        ]);
    }

    public function create()
    {
        return view("dashboard.categories.category.create");
    }

    public function store(Request $request)
    {
        $categoryFormData=$request->validate([
            "name"=>["required",Rule::unique("categories", "name")],
            "slug"=>["required",Rule::unique("categories", "slug")],
            "status"=>["required"],
        ]);


        Category::create($categoryFormData);

        return to_route("admin.category")->with("success", "Category is added successfully");
    }

    public function edit(Category $category)
    {
        return view("dashboard.categories.category.edit", [
            "category"=>$category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $categoryFormData=$request->validate([
            "name"=>["required",Rule::unique("categories", "name")->ignore($category->id)],
            "slug"=>["required",Rule::unique("categories", "slug")->ignore($category->id)],
            "status"=>["required"],
        ]);


        $category->update($categoryFormData);

        return to_route("admin.category")->with("success", "Category is updated successfully");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("admin.category")->with("success", "Category is deleted successfully");
    }
}
