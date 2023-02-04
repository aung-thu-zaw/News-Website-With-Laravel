<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\VideoNewsPost;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        Meta::setTitle($category->name);

        LanguageHelper::readJson();

        $category=$category->load("subCategories.category");

        $subCategoryIDs=[];

        foreach ($category->subCategories as $subCategory) {
            $subCategoryIDs[]=$subCategory->id;
        }

        if (request("type")=="articles") {
            $newsPosts=NewsPost::whereHas("subCategory", function ($query) use ($subCategoryIDs) {
                $query->whereIn("sub_category_id", $subCategoryIDs);
            })->with("subCategory", "author")
              ->filterRequest(request(["query","subcategory"]))
              ->paginate(18);

            return view('categories.category.show', compact("category", "newsPosts"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::whereHas("subCategory", function ($query) use ($subCategoryIDs) {
                $query->whereIn("sub_category_id", $subCategoryIDs);
            })->with("subCategory", "author")
              ->filterRequest(request(["query","subcategory"]))
              ->paginate(18);

            return view('categories.category.show', compact("category", "videoNewsPosts"));
        }
    }
}
