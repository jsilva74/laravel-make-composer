<?php

namespace LaravelMakeComposer;

use Illuminate\Support\ServiceProvider;
use LaravelMakeComposer\Commands\MakeComposerCommand;

class MakeComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/make-composer.php' =>
                config_path('make-composer.php')
        ], 'make-composer');

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeComposerCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/make-composer.php',
            'make-composer'
        );
    }
}
