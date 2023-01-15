<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            "name"=>["required","string",Rule::unique("categories", "name")],
            "slug"=>["required","string",Rule::unique("categories", "slug")],
            "status"=>["required","string"],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $category = $this->route()->parameter('category');
            $rules["name"]=["required","string",Rule::unique("categories", "name")->ignore($category)];
            $rules["slug"]=["required","string",Rule::unique("categories", "slug")->ignore($category)];
        }

        return $rules;
    }
}
