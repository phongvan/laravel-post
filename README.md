### Package Test

#### 1  Install 

<code>composer require unicadev/laravel-post</code>
#### 2 Update provider

<code>config/app.php</code>

<code>'providers' => [
        UnicaDev\\LaravelPost\\LaravelPostServiceProvider::class
    ],</code>
    
#### 3 Publish vendor 
<code>php artisan vendor:publish provider="UnicaDev\\LaravelPost\\LaravelPostServiceProvider::class"</code>
