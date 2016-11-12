<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Theme;
use App\ShopSettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.themeView', function ($view) {
            $themeSettings = Theme::where('active', 1)->get();
            $view->themeSettings = $themeSettings;
        });
        
        view()->composer('layouts.menuView', function ($view) {
            $shopSettings = ShopSettings::all();
            $view->shopSettings = $shopSettings;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
