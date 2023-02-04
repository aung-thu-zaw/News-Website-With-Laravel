<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class LanguageRequest extends FormRequest
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
            "name"=>["required","string",Rule::unique("languages", "name")],
            "short_name"=>["required","string",Rule::unique("languages", "short_name")],
            "is_default"=>["required"]
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $language = $this->route()->parameter('language');
            $rules["name"]=["required","string",Rule::unique("languages", "name")->ignore($language)];
            $rules["short_name"]=["required","string",Rule::unique("languages", "short_name")->ignore($language)];
        }

        return $rules;
    }
}
