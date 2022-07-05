<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.include.header', function ($view) {
            $view->with('category' , Category::select('id' , 'name')->get()) ;
            $view->with('settings', Setting::select('logo' , 'favicon')->first());
        });

        view()->composer('front.include.footer', function ($view) {
            $view->with('settings', Setting::first());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
