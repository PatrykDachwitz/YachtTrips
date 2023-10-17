<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BannersRepository as BannersRepositoryInterface;
use App\Repository\Eloquent\BannersRepository;
use App\Repository\CategoryBannersRepository as CategoryBannersRepositoryInterface;
use App\Repository\Eloquent\CategoryBannersRepository;
class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(
            BannersRepositoryInterface::class,
            BannersRepository::class
        );

        $this->app->singleton(
            CategoryBannersRepositoryInterface::class,
            CategoryBannersRepository::class
        );
    }
}
