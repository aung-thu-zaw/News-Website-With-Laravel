<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use LanguageHelper;

class PrivacyAndPolicyController extends Controller
{
    public function index(){
        Meta::prependTitle("Privacy And Policy");

        LanguageHelper::readJson();

        return view("privacy-and-policy.index");
    }
}
