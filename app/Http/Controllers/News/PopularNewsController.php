<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\NewsPost;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class PopularNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Popular News");

        LanguageHelper::readJson();

        if (request("type")=="articles") {
            $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                              ->orderBy("visitors", "desc")
                              ->filterRequest(request(["query","subcategory"]))
                              ->paginate(18);

            return view("popular-news-and-recent-news.popular-news.index", compact("newsPosts"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                           ->orderBy("visitors", "desc")
                           ->filterRequest(request(["query","subcategory"]))
                           ->paginate(18);

            return view("popular-news-and-recent-news.popular-news.index", compact("videoNewsPosts"));
        }
    }
}
