<?php

namespace App\Http\Controllers\Admin\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPermissionUserListController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.users.permission-user-lists.index", [
            "permissionUsers"=>User::whereNotNull("role")->orderBy("id", "desc")->paginate(10)
        ]);
    }
    public function create()
    {
        return view("admin.dashboard.users.permission-user-lists.create");
    }

    public function store(Request $request)
    {
        $userFormData=$request->validate([
            "avatar"=>["required","mimes:png,jpg,webp"],
            "name"=>["required"],
            "email"=>["required"],
            "password"=>["required","confirmed"],
            "role"=>["required"]
        ]);

        $extension=$request->file("avatar")->extension();

        $time=time();

        $finalName="avatar-$time.$extension";

        $request->file("avatar")->storeAs("avatars", $finalName);

        $userFormData["avatar"]=$finalName;

        $userFormData["email_verified_at"]=now();

        User::create($userFormData);

        return to_route("admin.permission-users.index")->with("success", "Permission user is created successfully");
    }

    public function edit($id)
    {
        $user=User::where("id", $id)->first();

        return view("admin.dashboard.users.permission-user-lists.edit", [
            "user"=>$user,
            "page"=>request('page'),
        ]);
    }

    public function update(Request $request, $id)
    {
        $user=User::where("id", $id)->first();

        $userFormData=$request->validate([
            "name"=>["required"],
            "email"=>["required"],
            "role"=>["required"]
        ]);

        if ($request->hasFile("avatar")) {
            $request->validate([
            "avatar"=>["required","mimes:png,jpg,webp"],
            ]);

            if (!empty($user->avatar) && file_exists(public_path("storage/avatars/$user->avatar"))) {
                unlink(public_path("storage/avatars/$user->avatar"));
            }

            $extension=$request->file("avatar")->extension();

            $time=time();

            $finalName="avatar-$time.$extension";

            $request->file("avatar")->storeAs("avatars", $finalName);

            $userFormData["avatar"]=$finalName;
        }


        if ($request->input("password") && $request->input("password_confirmation")) {
            $request->validate([
                "password"=>["required","confirmed"],
            ]);

            $userFormData["password"]=$request->password;
        }


        $user->update($userFormData);


        return to_route("admin.permission-users.index")->with("success", "Permission user is updated successfully");
    }

    public function destroy($id)
    {
        $user=User::where("id", $id)->first();
        $user->delete();
        return to_route("admin.permission-users.index", "page=".request("page"))->with("success", "Permission user is deleted successfully");
    }
}
