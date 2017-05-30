<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Aspects\LoggingAspect;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LoggingAspect::class, function ($app) {
            return new LoggingAspect($app->make(LoggerInterface::class));
        });

        $this->app->tag([LoggingAspect::class], 'goaop.aspect');
    }

    public function boot()
    {

    }


}
