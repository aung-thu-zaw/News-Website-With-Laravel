<?php

namespace App\Http\Controllers\Admin\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminNormalUserListController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.users.normal-user-lists.index", [
            "normalUsers"=>User::orderBy("id", "desc")->paginate(10)
        ]);
    }
}
