<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class AuthorDetailController extends Controller
{
    public function show($id)
    {
        $author=User::where("id", $id)->first();
        Meta::setTitle("$author->name - Author Profile");

        LanguageHelper::readJson();

        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;


        if (request("type")=="articles") {
            $newsPosts=$author->newsPosts()->where("language_id", $currentLanguageId)->filterRequest(request(["query","subcategory"]))->orderBy("id", "desc")->paginate(12)->withQueryString();

            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();

            return view("author-details.show", compact("author", "newsPosts", "subCategories"));
        } elseif (request("type")=="videos") {
            $videoNewsPosts=$author->videoNewsPosts()->where("language_id", $currentLanguageId)->filterRequest(request(["query","subcategory"]))->orderBy("id", "desc")->paginate(12)->withQueryString();

            $subCategories=SubCategory::with("category")->where([["status_on_navbar", "show"],["language_id",$currentLanguageId]])->orderBy("id", "desc")->get();

            return view("author-details.show", compact("author", "videoNewsPosts", "subCategories"));
        }
    }
}
