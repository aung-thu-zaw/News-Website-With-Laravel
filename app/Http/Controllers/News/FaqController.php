<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class FaqController extends Controller
{
    public function index(){
        Meta::setTitle("FAQ");
        return view("faq.index");
    }
}
