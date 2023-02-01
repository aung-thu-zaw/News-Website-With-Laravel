<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionUserService
{
    public function uploadAvatar(Request $request): ?string
    {
        if ($request->hasFile("avatar")) {
            $request->validate([
                "avatar"=>["required","mimes:png,jpg,jpeg,webp"],
            ]);

            $extension=$request->file("avatar")->extension();

            $time=time();

            $finalName="avatar-$time.$extension";

            $request->file("avatar")->storeAs("avatars", $finalName);

            return $finalName;
        } else {
            return null;
        }
    }

    public function createUser(array $userData): User
    {
        return User::create([
            "name" => $userData["name"],
            "about"=>$userData["about"],
            "email" => $userData["email"],
            "password" => $userData["password"],
            "role"=>$userData["role"],
            "avatar" => $userData["avatar"],
            "email_verified_at"=>$userData["email_verified_at"],
            "twitter_link"=>$userData["twitter_link"]
        ]);
    }

    public function updateAvatar(Request $request, $user): ?string
    {
        if ($request->hasFile("avatar")) {
            $request->validate([
                "avatar"=>["required","mimes:png,jpg,jpeg,webp"],
            ]);

            User::deleteUserPhoto($user);

            $extension=$request->file("avatar")->extension();

            $time=time();

            $finalName="avatar-$time.$extension";

            $request->file("avatar")->storeAs("avatars", $finalName);

            return $finalName;
        } else {
            return $user->avatar;
        }
    }

    public function updatePassword(Request $request, $user): ?string
    {
        if ($request->input("password") && $request->input("password_confirmation")) {
            $request->validate([
                    "password"=>["required","confirmed","min:8","max:20"],

            ]);

            return $request->password;
        }

        return $user->password;
    }
}
