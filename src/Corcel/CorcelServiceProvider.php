<?php

namespace Corcel;

use Illuminate\Support\ServiceProvider;

class CorcelServiceProvider extends ServiceProvider
{

	protected $connection = '';

	/**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('corcel.php'),
        ]);
    }

	/**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'corcel'
        );
    }
}

?>