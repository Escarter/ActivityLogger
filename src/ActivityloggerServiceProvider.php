<?php

namespace CleBea\Activitylogger;

use Illuminate\Support\ServiceProvider;

class ActivityloggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->singleton('ActivityLogger', function (Container $app) {
            return new ActivityLogger();
        });
        $this->app->alias('ActivityLogger', ActivityLogger::class);
    }
}
