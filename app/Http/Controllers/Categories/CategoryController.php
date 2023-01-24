<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\SubCategory;
use Butschster\Head\Facades\Meta;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        Meta::setTitle($category->name);

        $category=$category->load("subCategories.category");

        $subCategoryIDs=[];

        foreach ($category->subCategories as $subCategory) {
            $subCategoryIDs[]=$subCategory->id;
        }

        $newsPosts=NewsPost::whereHas("subCategory", function ($query) use ($subCategoryIDs) {
            $query->whereIn("sub_category_id", $subCategoryIDs);
        })->with("subCategory.category", "author")->paginate(18);


        return view('categories.category.show', compact("category", "newsPosts"));
    }
}
