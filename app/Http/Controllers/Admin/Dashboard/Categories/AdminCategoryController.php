<?php

namespace App\Http\Controllers\Admin\Dashboard\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Butschster\Head\Facades\Meta;

class AdminCategoryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Category");
        return view("admin.dashboard.categories.category.index", [
            "categories"=>Category::orderBy("id", "desc")->paginate(10)
        ]);
    }

    public function create()
    {
        Meta::prependTitle("Category Create");
        return view("admin.dashboard.categories.category.create");
    }

    public function store(Request $request)
    {
        $categoryFormData=$request->validate([
            "name"=>["required",Rule::unique("categories", "name")],
            "slug"=>["required",Rule::unique("categories", "slug")],
            "status"=>["required"],
        ]);

        Category::create($categoryFormData);

        return to_route("admin.categories.index")->with("success", "Category is added successfully");
    }

    public function edit(Category $category)
    {
        Meta::prependTitle("Category Edit");
        return view("admin.dashboard.categories.category.edit", [
            "category"=>$category,
            "page"=>request('page'),
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
        return to_route("admin.categories.index", "page=".request("page"))->with("success", "Category is updated successfully");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("admin.categories.index", "page=".request("page"))->with("success", "Category is deleted successfully");
    }
}
