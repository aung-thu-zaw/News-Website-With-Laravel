<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\NewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class PopularNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Popular News");

        $popularNewsPosts=NewsPost::with("subCategory.category:id,name,slug", "author:id,name")
                          ->orderBy("visitors", "desc")
                          ->paginate(15);

        return view("popular-news-and-recent-news.popular-news.index", compact("popularNewsPosts"));
    }
}
