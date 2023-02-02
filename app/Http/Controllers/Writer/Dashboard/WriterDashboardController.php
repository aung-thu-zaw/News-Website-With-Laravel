<?php

namespace App\Http\Controllers\Writer\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Models\NewsPost;
use App\Models\User;
use App\Models\VideoNewsPost;
use Illuminate\Support\Facades\DB;

class WriterDashboardController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Writer Dashboard");

        $userCount=User::count();
        $newsPostCount=NewsPost::count();
        $videoNewsPostCount=VideoNewsPost::count();

        $data = User::selectRaw("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
        ->whereDate('created_at', '>=', now()->days('-30'))
        ->groupBy('date')
        ->get();

        return view('writer.dashboard.index', compact("userCount", "newsPostCount", "videoNewsPostCount", "data"));
    }
}
