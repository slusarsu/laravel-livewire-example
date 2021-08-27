<?php

namespace App\Providers;

use App\Contracts\IPost;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IPost::class, function ($app) {
            return new PostService($app->make(Post::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
