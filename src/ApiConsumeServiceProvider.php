<?php

namespace talesmousinho\LaravelApiConsume;

use Illuminate\Support\ServiceProvider;

class ApiConsumeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/apiconsume.php' => config_path('apiconsume.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'talesmousinho\LaravelApiConsume\ApiConsume',
            'talesmousinho\LaravelApiConsume\ApiConsume'
        );
    }
}
