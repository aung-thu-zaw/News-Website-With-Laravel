<?php

namespace App\View\Components;

use App\Models\NewsPost;
use Illuminate\View\Component;

class PopularNewsAndRecentNews extends Component
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
        return view('components.popular-news-and-recent-news', [
            "popularNews"=>NewsPost::with("subCategory.category", "author")
            ->orderBy("visitors", "desc")
            ->take(4)
            ->get(),

            "recentNews"=>NewsPost::with("subCategory.category", "author")
            ->orderBy("id", "desc")
            ->take(4)
            ->get(),
        ]);
    }
}
