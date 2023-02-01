<?php

namespace App\Http\Controllers\Editor\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;

class EditorDashboardController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Admin Dashboard");

        return view('admin.dashboard.index');
    }
}
