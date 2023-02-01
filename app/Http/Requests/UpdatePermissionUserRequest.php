<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePermissionUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows("admin");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules= [
            "name"=>["required","string","max:255","min:4"],
            "about"=>["required","string"],
            "email"=>["required","email"],
            "role"=>["required","string"],
            "twitter_link"=>["required","string"]
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $permissionUser = $this->route()->parameter('permission_user');
            $rules["email"]=["required","email",Rule::unique("users", "email")->ignore($permissionUser)];
        }

        return $rules;
    }
}
