<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class FaqController extends Controller
{
    public function index(){
        Meta::prependTitle("FAQ");

        LanguageHelper::readJson();

        return view("faq.index");
    }
}
