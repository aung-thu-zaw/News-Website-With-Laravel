<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class RecentNewsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Recent News");


        $recentNewsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
                         ->orderBy("id", "desc")
                         ->take(18)
                         ->get();

        return view("popular-news-and-recent-news.recent-news.index", compact("recentNewsPosts"));
    }
}
