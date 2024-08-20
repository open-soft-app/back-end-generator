<?php

namespace OpenSoftApp\BackEndGenerator;

use OpenSoftApp\BackEndGenerator\Commands\LivewireCrudGenerator;
use OpenSoftApp\BackEndGenerator\Commands\LivewireInstall;
use Illuminate\Support\ServiceProvider;

class BackEndGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
			//Publishing config file
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('back-end-generator.php'),
            ], 'config');

            // Registering package commands.
            $this->commands([
				LivewireCrudGenerator::class,
				LivewireInstall::class,
			]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'back-end-generator');

        // Register the main class to use with the facade
        $this->app->singleton('back-end-generator', function () {
            return new BackEndGenerator;
        });
    }
}
