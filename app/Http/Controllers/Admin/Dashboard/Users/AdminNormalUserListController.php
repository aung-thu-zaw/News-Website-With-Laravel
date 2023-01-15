<?php

namespace App\Http\Controllers\Admin\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Butschster\Head\Facades\Meta;

class AdminNormalUserListController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Normal User Lists");

        $normalUsers=User::orderBy("id", "desc")->paginate(10);

        return view("admin.dashboard.users.normal-user-lists.index", compact("normalUsers"));
    }
}
