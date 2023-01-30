<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class DateNewsController extends Controller
{
    public function handleDateFormat(Request $request)
    {
        $dateArray=explode("-", $request->date);

        $year=$dateArray[0];
        $month=$dateArray[1];
        $day=$dateArray[2];

        return to_route("date-news.show", [$year, $month, $day,'type'=>'articles']);
    }

    public function show($year, $month, $day)
    {
        Meta::setTitle("$year-$month-$day");


        if (request("type")=="articles") {
            $newsPosts=NewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
            ->whereYear("created_at", $year)
            ->whereMonth("created_at", $month)
            ->whereDay("created_at", $day)
            ->orderBy("id", "desc")
            ->filterRequest(request(["query","subcategory"]))
            ->paginate(18);

            return view("date-post.show", compact("newsPosts"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=VideoNewsPost::with("subCategory:id,category_id,name,slug", "author:id,name")
            ->whereYear("created_at", $year)
            ->whereMonth("created_at", $month)
            ->whereDay("created_at", $day)
            ->orderBy("id", "desc")
            ->filterRequest(request(["query","subcategory"]))
            ->paginate(18);

            return view("date-post.show", compact("videoNewsPosts"));
        }
    }
}
