<?php

namespace App\View\Components;

use App\Models\SidebarAdvertisement;
use Illuminate\View\Component;

class SidebarTopAdvertisement extends Component
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
        return view('components.sidebar-top-advertisement', [
            "sidebarAdvertisement"=>SidebarAdvertisement::where("id", 1)->first()
        ]);
    }
}
