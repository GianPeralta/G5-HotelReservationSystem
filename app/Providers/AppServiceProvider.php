<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Routing\RoutingServiceProvider;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends RoutingServiceProvider
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
        if (env('APP_ENV') !== 'local'){
            URL::forScheme('https');
        }
        else{
            URL::forScheme('https');
        }
    }
}
