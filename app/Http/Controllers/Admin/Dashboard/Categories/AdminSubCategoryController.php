<?php

namespace App\Http\Controllers\Admin\Dashboard\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Butschster\Head\Facades\Meta;

class AdminSubCategoryController extends Controller
{
    public function index()
    {
        Meta::prependTitle("SubCategory");

        $subCategories=SubCategory::search(request("search"))
                       ->paginate(10)
                       ->withQueryString();

        $subCategories->load("category");

        return view("admin.dashboard.categories.sub-category.index", compact("subCategories"));
    }

    public function create()
    {
        Meta::prependTitle("SubCategory Create");

        $categories=Category::all();

        return view("admin.dashboard.categories.sub-category.create", compact("categories"));
    }

    public function store(SubCategoryRequest $request)
    {
        SubCategory::create($request->validated());

        return to_route("admin.sub-categories.index")->with("success", "SubCategory is added successfully");
    }

    public function edit(SubCategory $subCategory)
    {
        Meta::prependTitle("SubCategory Edit");

        $subCategory=$subCategory->load("category");

        $categories=Category::select("id", "name")->get();

        $page=request('page');

        return view("admin.dashboard.categories.sub-category.edit", compact("subCategory", "categories", "page"));
    }

    public function update(SubCategoryRequest $request, SubCategory $subCategory)
    {
        $subCategory->update($request->validated());

        return to_route("admin.sub-categories.index", "page=".request("page"))->with("success", "SubCategory is updated successfully");
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();

        return to_route("admin.sub-categories.index", "page=".request("page"))->with("success", "SubCategory is deleted successfully");
    }
}
