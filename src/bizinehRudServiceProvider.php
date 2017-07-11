<?php

namespace xani\bizinehRud;

use Illuminate\Support\ServiceProvider;

class bizinehRudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadViewsFrom(__DIR__.'/views', 'bizinehRud');
        $this->publishes([
            __DIR__.'/views'=>base_path('resources/views/xani/bizinehRud'),
            __DIR__.'/config.php'=>base_path('config/XBtelegram.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__.'/Route.php';
        // $this->app->make(xani\bizinehRud\telegramCtrl::class);
    }
}
