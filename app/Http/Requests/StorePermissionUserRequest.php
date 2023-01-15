<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePermissionUserRequest extends FormRequest
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
        return
       [
            "name"=>["required","string","max:255","min:4"],
            "email"=>["required","email",Rule::unique("users", "email")],
            "password"=>["required","confirmed","min:8","max:20"],
            "role"=>["required","string"]
        ];
    }
}
