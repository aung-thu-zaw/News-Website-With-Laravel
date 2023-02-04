<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Terms And Conditions");

        LanguageHelper::readJson();

        return view("terms-and-conditions.index");
    }
}
