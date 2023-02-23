<?php

namespace UnicaDev\LaravelPost;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelPost
{
    public static function routes()
    {
        Route::get('posts', function () {
            return view('laravel-post::posts');
        });
    }
}
