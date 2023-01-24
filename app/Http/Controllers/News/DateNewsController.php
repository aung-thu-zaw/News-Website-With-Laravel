<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class DateNewsController extends Controller
{
    public function show($year, $month, $day)
    {
        Meta::setTitle("$year-$month-$day");

        $newsPosts=NewsPost::with("subCategory.category:id,slug", "author:id,name")
                   ->whereYear("created_at", $year)
                   ->whereMonth("created_at", $month)
                   ->whereDay("created_at", $day)
                   ->orderBy("id", "desc")
                   ->paginate(15);

        return view("date-post.show", compact("newsPosts"));
    }
}
