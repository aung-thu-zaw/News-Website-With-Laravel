<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Butschster\Head\Facades\Meta;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        Meta::setTitle($category->name);

        $category=$category->load("subCategories.category");

        return view('categories.category.show', compact("category"));
    }
}
