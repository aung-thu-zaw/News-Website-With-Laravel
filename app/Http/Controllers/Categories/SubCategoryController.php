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

        return view('categories.sub-category.show', [
            "category"=>$category,
            "subCategory"=>$subCategory,
            "newsPosts"=>NewsPost::with("subCategory")
                        ->where("sub_category_id", $subCategory->id)
                        ->orderBy("id", "desc")
                        ->paginate(12)
        ]);
    }
}
