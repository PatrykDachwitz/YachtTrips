<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BannersRepository as BannersRepositoryInterface;
use App\Repository\Eloquent\BannersRepository;
use App\Repository\CategoryBannersRepository as CategoryBannersRepositoryInterface;
use App\Repository\Eloquent\CategoryBannersRepository;
use App\Repository\TemplatesRepository as TemplatesRepositoryInterface;
use App\Repository\Eloquent\TemplatesRepository;
use App\Repository\OceansRepository as OceansRepositoryInterface;
use App\Repository\Eloquent\OceansRepository;
use App\Repository\YachtsRepository as YachtsRepositoryInterface;
use App\Repository\Eloquent\YachtsRepository;
use App\Repository\TripsRepository as TripsRepositoryInterface;
use App\Repository\Eloquent\TripsRepository;
use App\Repository\OrdersRepository as OrdersRepositoryInterface;
use App\Repository\Eloquent\OrdersRepository;
use App\Repository\BooksRepository as BooksRepositoryInterface;
use App\Repository\Eloquent\BooksRepository;
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
        $this->app->singleton(
            TemplatesRepositoryInterface::class,
            TemplatesRepository::class
        );
        $this->app->singleton(
            TripsRepositoryInterface::class,
            TripsRepository::class
        );
        $this->app->singleton(
            OceansRepositoryInterface::class,
            OceansRepository::class
        );
        $this->app->singleton(
            YachtsRepositoryInterface::class,
            YachtsRepository::class
        );

        $this->app->singleton(
            OrdersRepositoryInterface::class,
            OrdersRepository::class
        );

        $this->app->singleton(
            BooksRepositoryInterface::class,
            BooksRepository::class
        );
    }
}
