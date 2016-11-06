<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Theme;

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
