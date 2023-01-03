<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class RecentNewsController extends Controller
{
    public function show()
    {
        Meta::setTitle("Recent News");
        return view("popular-news-and-recent-news.recent-news.show", [
            "recentNewsPosts"=>NewsPost::with("subCategory:id,name,slug", "author:id,name")
            ->orderBy("id", "desc")
            ->take(10)
            ->get(),
        ]);
    }
}
