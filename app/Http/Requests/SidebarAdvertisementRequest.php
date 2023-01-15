<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class SidebarAdvertisementRequest extends FormRequest
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
        return [
            "top_advertisement_url"=>["nullable"],
            "top_advertisement_status"=>["required","string"],
            "bottom_advertisement_url"=>["nullable"],
            "bottom_advertisement_status"=>["required","string"]
        ];
    }
}
