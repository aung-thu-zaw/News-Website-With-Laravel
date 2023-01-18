<?php

namespace App\Http\Controllers\Admin\Dashboard\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Butschster\Head\Facades\Meta;

class AdminCategoryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Category");

        $categories=Category::search(request("search"))
                    ->orderBy("id", "desc")
                    ->paginate(10)
                    ->withQueryString();

        return view("admin.dashboard.categories.category.index", compact("categories"));
    }

    public function create()
    {
        Meta::prependTitle("Category Create");

        return view("admin.dashboard.categories.category.create");
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return to_route("admin.categories.index")->with("success", "Category is added successfully");
    }

    public function edit(Category $category)
    {
        Meta::prependTitle("Category Edit");

        $page=request('page');

        return view("admin.dashboard.categories.category.edit", compact("category", "page"));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return to_route("admin.categories.index", "page=".request("page"))->with("success", "Category is updated successfully");
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return to_route("admin.categories.index", "page=".request("page"))->with("success", "Category is deleted successfully");
    }
}
