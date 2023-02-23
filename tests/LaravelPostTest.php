<?php

namespace UnicaDev\LaravelPost\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;
use UnicaDev\LaravelPost\LaravelPostServiceProvider;

class LaravelPostTest extends TestCase
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [LaravelPostServiceProvider::class];
    }

    /** @test */
    public function it_can_access_posts_route()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
        $response->assertViewIs('laravel-post::posts');
    }
}
