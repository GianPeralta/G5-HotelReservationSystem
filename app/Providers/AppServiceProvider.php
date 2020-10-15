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
        App::bind('url', function () {
            $generator = new UrlGenerator(
                App::make('router')->getRoutes(),
                App::make('request');
            });

            $generator->forceSchema('https');

            return $generator;
        }

        parent::boot();
    }
}
