<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class SubCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules= [
            "category_id"=>["required",Rule::exists("categories", "id")],
            "language_id"=>["required",Rule::exists("languages")],
            "name"=>["required","string",Rule::unique("sub_categories", "name")],
            "slug"=>["required","string",Rule::unique("sub_categories", "slug")],
            "status_on_navbar"=>["required","string"],
            "status_on_home"=>["required","string"],
        ];


        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $subCategory = $this->route()->parameter('sub_category');
            $rules["name"]=["required","string",Rule::unique("sub_categories", "name")->ignore($subCategory)];
            $rules["slug"]=["required","string",Rule::unique("sub_categories", "slug")->ignore($subCategory)];
        }

        return $rules;
    }
}
