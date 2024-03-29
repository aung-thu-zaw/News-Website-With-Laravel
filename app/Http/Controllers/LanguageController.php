<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function handleLanguage(Request $request)
    {
        session()->put("language", $request->language);

        return redirect()->back();
    }
}
