<?php

namespace Dimsav\Translatable;

use Illuminate\Support\ServiceProvider;

class TranslatableLumenServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->configure('dimsav.translatable');
        $path = realpath(__DIR__.'/../config/translatable.php');
        $this->mergeConfigFrom($path, 'translatable');
//        $this->publishes([
//            __DIR__.'/../config/translatable.php' => config_path('translatable.php'),
//        ], 'translatable');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/translatable.php', 'translatable'
        );
    }
}
