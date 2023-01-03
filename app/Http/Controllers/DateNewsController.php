<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class DateNewsController extends Controller
{
    public function show($year, $month, $day)
    {
        Meta::setTitle("$year-$month-$day");
        return view("date-post.show", [
            "newsPosts"=>NewsPost::with("subCategory", "author")->whereYear("created_at", $year)->whereMonth("created_at", $month)->whereDay("created_at", $day)->orderBy("id", "desc")->paginate(12),

        ]);
    }
}
