<?php

/**
  * @author Amjad Iqbal
  * @author Amjad Iqbal <contact@amjadiqbal.me>
  */
  
namespace AmjadIqbal\Alertify\Providers;

use Illuminate\Support\ServiceProvider;

class AlertifyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerHelpers();

        echo __DIR__;
        
        $this->loadViewsFrom(__DIR__ . '/Views', 'alertify');

        $this->publishes([
            __DIR__ . '/Views' => resource_path('Views/vendor/alertify')
        ], 'view');

        $this->publishes([
            __DIR__.'/config/alertify.php' => config_path('alertify.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/assets/js' => public_path('alertify')
        ], 'public');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'AmjadIqbal\Alertify\Storage\SessionStore',
            'AmjadIqbal\Alertify\Storage\AlertSessionStore',
            'AmjadIqbal\Alertify\Core\Alertify'
        );
        $this->app->singleton('alert', function ($app) {
            return $this->app->make('AmjadIqbal\Alertify\Core\Notifier');
        });
    }

    /**
     * Register helpers file
     */
    public function registerHelpers()
    {
        // Load the helpers in src/functions.php
        if (file_exists($file = __DIR__ . '/Helpers/functions.php')) {
            require $file;
        }
    }

}
