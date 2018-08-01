<?php
namespace grittekno\Test;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'grittekno.test');

        $this->publishes([
            __DIR__ . '/migrations' => base_path('database/migrations'),
        ]);
    }

    public function register()
    {
        $this->app->bind('grittekno.test', function () {
            return new Test();
        });
    }
}