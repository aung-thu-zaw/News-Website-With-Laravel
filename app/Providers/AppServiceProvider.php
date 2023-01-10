<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\HomeAdvertisement;
use App\Models\LiveVideo;
use App\Models\Page;
use App\Models\Setting;
use App\Models\SidebarAdvertisement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Model::unguard();
        Model::preventLazyLoading(! app()->isProduction());


        View::share("homeAdvertisement", HomeAdvertisement::where("id", 1)->first());
        View::share("sidebarAdvertisement", SidebarAdvertisement::where("id", 1)->first());
        View::share("setting", Setting::where("id", 1)->first());
        View::share("about", Page::where("id", 1)->first());
        View::share("faq", Page::where("id", 2)->first());
        View::share("faqAccordions", Faq::all());
        View::share("contact", Page::where("id", 3)->first());
        View::share("termsAndConditions", Page::where("id", 4)->first());
        View::share("privacyAndPolicy", Page::where("id", 5)->first());
        View::share("disclaimer", Page::where("id", 6)->first());
        View::share("liveVideo", LiveVideo::orderBy("id", "desc")->first());
    }
}
