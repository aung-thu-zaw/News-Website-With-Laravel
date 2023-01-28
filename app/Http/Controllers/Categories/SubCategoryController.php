<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class SubCategoryController extends Controller
{
    public function show(Category $category, SubCategory $subCategory)
    {
        Meta::setTitle($subCategory->name);

        $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                   ->where("sub_category_id", $subCategory->id)
                   ->orderBy("id", "desc")
                   ->filterRequest(request(["query"]))
                   ->paginate(15);

        return view('categories.sub-category.show', compact("category", "subCategory", "newsPosts"));
    }
}
