<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AboutUsController extends Controller
{
    public function index()
    {
        Meta::prependTitle("About-us");
        return view("about-us.index");
    }
}
