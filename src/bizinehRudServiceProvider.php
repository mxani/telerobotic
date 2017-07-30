<?php

namespace XB;

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
            __DIR__.'/config.php'=>base_path('config/XBtelegram.php'),
            __DIR__.'/telegram.php'=>base_path('routes/telegram.php'),
            __DIR__.'/Magazines'=>base_path('app/Magazines'),
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
