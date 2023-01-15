<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class NewsPostRequest extends FormRequest
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
            "sub_category_id"=>["required",Rule::exists("sub_categories", "id")],
            "title"=>["required","string",Rule::unique("news_posts", "title")],
            "slug"=>["required","string",Rule::unique("news_posts", "slug")],
            "body"=>["required","string"],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $newsPost = $this->route()->parameter('news_post');
            $rules["title"]=["required","string",Rule::unique("news_posts", "title")->ignore($newsPost)];
            $rules["slug"]=["required","string",Rule::unique("news_posts", "slug")->ignore($newsPost)];
        }

        return $rules;
    }
}
