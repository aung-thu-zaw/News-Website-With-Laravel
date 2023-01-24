<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\View\Component;

class Tags extends Component
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
        $tags=Tag::orderBy("id", "desc")->get();

        return view('components.tags', compact("tags"));
    }
}
