<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class AdminDashboardController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Admin Dashboard");
        return view('admin.dashboard.index');
    }
}
