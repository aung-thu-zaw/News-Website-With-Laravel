<?php

namespace App\View\Components;

use App\Models\NewsPost;
use Illuminate\View\Component;

class RandomNewsForYou extends Component
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
        return view('components.random-news-for-you', [
            "randomNews"=>NewsPost::inRandomOrder()->orderBy("id", "desc")->take(10)->get()
        ]);
    }
}
