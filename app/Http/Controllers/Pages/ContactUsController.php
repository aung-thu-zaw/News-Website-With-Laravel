<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class ContactUsController extends Controller
{
    public function index(){
        Meta::prependTitle("Contact Us");
        
        return view("contact-us.index");
    }
}
