<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class AboutUsController extends Controller
{
    public function index()
    {
        Meta::prependTitle("About Us");

        LanguageHelper::readJson();

        return view("about-us.index");
    }
}
