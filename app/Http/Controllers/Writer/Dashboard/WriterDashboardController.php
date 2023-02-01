<?php

namespace App\Http\Controllers\Writer\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WriterDashboardController extends Controller
{
    public function index()
    {
        return view("writer.dashboard.index");
    }
}
