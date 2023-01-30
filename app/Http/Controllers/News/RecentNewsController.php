<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class RecentNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Recent News");
        if (request("type")=="articles") {
            $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                             ->orderBy("id", "desc")
                             ->filterRequest(request(["query","subcategory"]))
                             ->paginate(18)
                             ->withQueryString();
            return view("popular-news-and-recent-news.recent-news.index", compact("newsPosts"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                            ->orderBy("id", "desc")
                            ->filterRequest(request(["query","subcategory"]))
                            ->paginate(18)
                            ->withQueryString();
            return view("popular-news-and-recent-news.recent-news.index", compact("videoNewsPosts"));
        }
    }
}
