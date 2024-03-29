<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Language;
use Illuminate\View\Component;
use LanguageHelper;

class CategoryNavbar extends Component
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

        $categories=Category::with("subCategories")
                    ->where([
                        ["status", "show"],
                        ["language_id",$currentLanguageId]
                    ])
                    ->get();

        return view('components.category-navbar', compact("categories"));
    }
}
