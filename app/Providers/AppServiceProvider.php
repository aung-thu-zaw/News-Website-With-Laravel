<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\HomeAdvertisement;
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
    }
}
