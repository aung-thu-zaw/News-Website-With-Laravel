<?php

namespace App\Http\Controllers\Admin\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionUserRequest;
use App\Http\Requests\UpdatePermissionUserRequest;
use App\Models\User;
use Butschster\Head\Facades\Meta;
use App\Services\PermissionUserService;

class AdminPermissionUserListController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Permission User List");

        $permissionUsers=User::whereNotNull("role")
                         ->filterRequest(request(["search"]))
                         ->orderBy("id", "desc")
                         ->paginate(10)
                         ->withQueryString();

        return view("admin.dashboard.users.permission-user-lists.index", compact("permissionUsers"));
    }

    public function create()
    {
        Meta::prependTitle("Permission User Create");

        return view("admin.dashboard.users.permission-user-lists.create");
    }

    public function store(StorePermissionUserRequest $request, PermissionUserService $permissionUserService)
    {
        $avatar = $permissionUserService->uploadAvatar($request);

        $permissionUserService->createUser($request->validated() + ['avatar' => $avatar,"email_verified_at"=>now()]);

        return to_route("admin.permission-users.index")->with("success", "Permission user is created successfully");
    }

    public function edit($id)
    {
        Meta::prependTitle("Permission User Edit");

        $user=User::where("id", $id)->first();

        $page=request('page');

        return view("admin.dashboard.users.permission-user-lists.edit", compact("user", "page"));
    }

    public function update(UpdatePermissionUserRequest $request, $id, PermissionUserService $permissionUserService)
    {
        $user=User::where("id", $id)->first();

        $avatar = $permissionUserService->updateAvatar($request, $user);

        $password = $permissionUserService->updatePassword($request, $user);

        $user->update($request->validated() + ['avatar' => $avatar,"password"=>$password]);

        return to_route("admin.permission-users.index")->with("success", "Permission user is updated successfully");
    }

    public function destroy($id)
    {
        $user=User::where("id", $id)->first();

        User::deleteUserPhoto($user);

        $user->delete();

        return to_route("admin.permission-users.index", "page=".request("page"))->with("success", "Permission user is deleted successfully");
    }
}
