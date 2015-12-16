<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish view files
        $this->loadViewsFrom(__DIR__.'/views', 'laravel-bootstrap');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/wzulfikar/laravel-bootstrap'),
        ]);
        
        // Publish assets
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/vendor/wzulfikar/laravel-bootstrap'),
        ], 'public');

        // Publish translation file
        $this->loadTranslationsFrom(__DIR__.'/lang', 'laravel-bootstrap');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Include route to test
        include __DIR__.'/routes.php';
    }
}
