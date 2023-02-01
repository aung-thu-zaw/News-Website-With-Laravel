<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class VideoNewsPostRequest extends FormRequest
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
            "video_id"=>["required","string"],
            "sub_category_id"=>["required",Rule::exists("sub_categories", "id")],
            "title"=>["required","string",Rule::unique("video_news_posts", "title")],
            "slug"=>["required","string",Rule::unique("video_news_posts", "slug")],
            "body"=>["required","string"],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $videoNewsPost = $this->route()->parameter('video_news_post');
            $rules["title"]=["required","string",Rule::unique("video_news_posts", "title")->ignore($videoNewsPost)];
            $rules["slug"]=["required","string",Rule::unique("video_news_posts", "slug")->ignore($videoNewsPost)];
        }

        return $rules;
    }
}
