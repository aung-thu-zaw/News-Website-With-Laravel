<?php

namespace App\View\Components;

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
        $latestNewsPosts=NewsPost::select("title", "slug")
                         ->orderBy("id", "desc")
                         ->take(8)
                         ->get();

        return view('components.latest-news-ticker', compact("latestNewsPosts"));
    }
}
