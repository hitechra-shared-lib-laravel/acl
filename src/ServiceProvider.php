<?php

namespace HitechraSharedLibLaravel\Acl;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'hitechra-acl-migrations');

        $this->publishes([
            __DIR__.'/../config/acl.php' => config_path('acl.php'),
        ], 'hitechra-acl-config');
    }
}
