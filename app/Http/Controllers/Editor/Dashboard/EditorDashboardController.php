<?php

namespace App\Http\Controllers\Editor\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Butschster\Head\Facades\Meta;
use App\Models\NewsPost;
use App\Models\User;
use App\Models\VideoNewsPost;
use Illuminate\Support\Facades\DB;

class EditorDashboardController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Editor Dashboard");

        $userCount=User::count();
        $newsPostCount=NewsPost::count();
        $videoNewsPostCount=VideoNewsPost::count();

        $data = User::selectRaw("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
        ->whereDate('created_at', '>=', now()->days('-30'))
        ->groupBy('date')
        ->get();

        return view('editor.dashboard.index', compact("userCount", "newsPostCount", "videoNewsPostCount", "data"));
    }
}
