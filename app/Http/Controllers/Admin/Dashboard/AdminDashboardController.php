<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use App\Models\User;
use App\Models\VideoNewsPost;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Admin Dashboard");

        $userCount=User::count();
        $newsPostCount=NewsPost::count();
        $videoNewsPostCount=VideoNewsPost::count();

        $data = User::selectRaw("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
        ->whereDate('created_at', '>=', now()->days('-30'))
        ->groupBy('date')
        ->get();

        return view('admin.dashboard.index', compact("userCount", "newsPostCount", "videoNewsPostCount", "data"));
    }
}
