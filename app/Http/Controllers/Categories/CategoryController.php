<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        Meta::setTitle("$category->name");
        return view('categories.category.show', [

            "category"=>$category->load("subCategories.category"),

        ]);
    }
}
