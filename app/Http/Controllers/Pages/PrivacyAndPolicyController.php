<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class PrivacyAndPolicyController extends Controller
{
    public function index(){
        Meta::prependTitle("Privacy And Policy");
        
        return view("privacy-and-policy.index");
    }
}
