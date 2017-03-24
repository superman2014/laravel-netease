<?php

namespace Superman2014\Netease;

use Illuminate\Support\ServiceProvider;

class NeteaseServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/netease.php' => config_path('netease.php'),
            ], 'config');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('netease', function ($app) {
            $appKey = config('netease.app_key');
            $appSecret = config('netease.app_secret');

            return new NeteaseAPI($appKey, $appSecret);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['netease'];
    }
}
