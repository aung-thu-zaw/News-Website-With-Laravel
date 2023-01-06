<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class DisclaimerController extends Controller
{
    public function index(){
        Meta::prependTitle("Disclaimer");
        return view("disclaimer.index");
    }
}
