<?php

namespace App\Providers;
use App\Brand;
use Illuminate\Support\ServiceProvider;
use View;


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
        View::composer('front-end.includes.header', function($view){
            $view->with('brands', Brand::where('publication_status', 1)->get());
        });
    }
    
}
