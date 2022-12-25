<?php

namespace Skycoder\LravelPluginManager;

use Illuminate\Support\ServiceProvider;

class PluginManagerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');


        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');


        $this->loadViewsFrom(__DIR__ . '/views', 'plugin-manager');


        $this->publishes(
            [__DIR__ . '/views' => base_path('resources/views/vendor/plugin-manager')],
            'plugin-manager'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
