<?php

namespace App\Http\Controllers\Admin\Dashboard\Advertisements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdvertisementController extends Controller
{
    public function index()
    {
        return view('dashboard.advertisements.home_advertisement.index');
    }
    public function edit()
    {
        return view('dashboard.advertisements.home_advertisement.edit');
    }
}
