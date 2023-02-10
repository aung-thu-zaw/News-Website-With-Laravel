<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Models\NewsPost;
use App\Models\SubCategory;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class SubCategoryController extends Controller
{
    public function show(Category $category, SubCategory $subCategory)
    {
        Meta::setTitle($subCategory->name);

        LanguageHelper::readJson();

        if (request("type")=="articles") {
            $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                       ->where("sub_category_id", $subCategory->id)
                       ->filterRequest(request(["query"]))
                       ->orderBy("id", "desc")
                       ->paginate(15);

            return view('categories.sub-category.show', compact("category", "subCategory", "newsPosts"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                            ->where("sub_category_id", $subCategory->id)
                            ->filterRequest(request(["query"]))
                            ->orderBy("id", "desc")
                            ->paginate(15);

            return view('categories.sub-category.show', compact("category", "subCategory", "videoNewsPosts"));
        }
    }
}
