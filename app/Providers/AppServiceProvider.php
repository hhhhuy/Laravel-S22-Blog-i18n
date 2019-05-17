<?php

namespace App\Providers;

use App\Repositories\Eloquent\Post\PostEloquentRepository;
use App\Repositories\Eloquent\Post\PostRepositoryInterface;
use App\Services\Post\PostService;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(PostRepositoryInterface::class, PostEloquentRepository::class);
        $this->app->singleton(PostServiceInterface::class, PostService::class);
    }
}
