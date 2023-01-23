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

        // $subCategories=SubCategory::where("category_id", $category->id)->get();


        // // $newsPosts=NewsPost::where("sub_category_id", $subCategories->pluck("id"))->get();
        // dd($newsPosts);





        return view('categories.category.show', compact("category"));
    }
}
