<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class ContactUsController extends Controller
{
    public function index()
    {
        Meta::setTitle("Contact-us");
        return view("contact-us.index");
    }
}
