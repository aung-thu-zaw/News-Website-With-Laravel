<?php

namespace App\Http\Controllers\Editor\Dashboard\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Butschster\Head\Facades\Meta;

class EditorCategoryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Category");

        $categories=Category::search(request("search"))
                    ->paginate(10)
                    ->withQueryString();

        return view("editor.dashboard.categories.category.index", compact("categories"));
    }

    public function create()
    {
        Meta::prependTitle("Category Create");

        return view("editor.dashboard.categories.category.create");
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return to_route("editor.categories.index")->with("success", "Category is added successfully");
    }

    public function edit(Category $category)
    {
        Meta::prependTitle("Category Edit");

        $page=request('page');

        return view("editor.dashboard.categories.category.edit", compact("category", "page"));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return to_route("editor.categories.index", "page=".request("page"))->with("success", "Category is updated successfully");
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return to_route("editor.categories.index", "page=".request("page"))->with("success", "Category is deleted successfully");
    }
}
