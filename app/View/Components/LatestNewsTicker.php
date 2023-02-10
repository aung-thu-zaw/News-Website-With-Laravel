<?php

namespace App\View\Components;

use App\Models\Language;
use App\Models\NewsPost;
use Illuminate\View\Component;

class LatestNewsTicker extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if (!session("language")) {
            $currentLanguage=Language::where("is_default", "yes")->first()->short_name;
        } else {
            $currentLanguage=session("language");
        }

        $currentLanguageId=Language::where("short_name", $currentLanguage)->first()->id;


        $latestNewsPosts=NewsPost::select("title", "slug")
                         ->where("language_id", $currentLanguageId)
                         ->orderBy("id", "desc")
                         ->take(10)
                         ->get();


        return view('components.latest-news-ticker', compact("latestNewsPosts"));
    }
}
