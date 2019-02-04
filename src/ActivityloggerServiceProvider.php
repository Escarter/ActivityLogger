<?php

namespace CleBea\ActivityLogger;

use Illuminate\Support\ServiceProvider;

class ActivityLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/database/migrations' => $this->app->databasePath().'/migrations',
        ], 'migrations');
    }

    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind('activitylogger', function() {
            return new ActivityLogger();
        });
    }
}
