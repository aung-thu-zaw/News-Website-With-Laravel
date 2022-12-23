<?php

namespace App\Http\Controllers\Admin\Dashboard\Advertisements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SidebarAdvertisementController extends Controller
{
    public function index()
    {
        return view('dashboard.advertisements.sidebar_advertisement.index');
    }
    public function edit()
    {
        return view('dashboard.advertisements.sidebar_advertisement.edit');
    }
}
