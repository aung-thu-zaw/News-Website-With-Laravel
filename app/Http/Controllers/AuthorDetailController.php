<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AuthorDetailController extends Controller
{
    public function show($id)
    {
        $author=User::where("id", $id)->first();
        Meta::setTitle("$author->name - Author Profile");

        if (request("type")=="articles") {
            $newsPosts=$author->newsPosts()->filterRequest(request(["query","subcategory"]))->orderBy("id", "desc")->paginate(12)->withQueryString();

            return view("author-details.show", compact("author", "newsPosts"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=$author->videoNewsPosts()->filterRequest(request(["query","subcategory"]))->orderBy("id", "desc")->paginate(12)->withQueryString();

            return view("author-details.show", compact("author", "videoNewsPosts"));
        }
    }
}
