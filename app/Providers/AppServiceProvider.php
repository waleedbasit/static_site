<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // view()->composer('layouts.header',function ($view){
        //     $view->with('archives',\App\mainpage::archives());
        // });
        view()->composer('layouts.header',function($view) {
            $view->with('main', \App\mainpage::find('1')); 
            // if you need to access in controller
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
