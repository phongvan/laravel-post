<?php

namespace UnicaDev\LaravelPost;

use Illuminate\Support\ServiceProvider;

class LaravelPostServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Views', 'laravel-post');

        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/laravel-post'),
            __DIR__.'/Migrations' => database_path('migrations'),
        ], 'laravel-post');
    }

    public function register()
    {
        LaravelPost::routes();
    }
}
