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
use App\Repository\PagesRepository as PagesRepositoryInterface;
use App\Repository\Eloquent\PagesRepository;
use App\Repository\FilesRepository as FilesRepositoryInterface;
use App\Repository\Eloquent\FilesRepository;
use App\Repository\FoldersRepository as FoldersRepositoryInterface;
use App\Repository\Eloquent\FoldersRepository;
use App\Repository\PaymentsRepository as PaymentsRepositoryInterface;
use App\Repository\Eloquent\PaymentsRepository;
use App\Repository\RoomsRepository as RoomsRepositoryInterface;
use App\Repository\Eloquent\RoomsRepository;
use App\Repository\UsersRepository as UsersRepositoryInterface;
use App\Repository\Eloquent\UsersRepository;
use App\Repository\VacationersRepository as VacationersRepositoryInterface;
use App\Repository\Eloquent\VacationersRepository;
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

        $this->app->singleton(
            PagesRepositoryInterface::class,
            PagesRepository::class
        );

        $this->app->singleton(
            FilesRepositoryInterface::class,
            FilesRepository::class
        );

        $this->app->singleton(
            FoldersRepositoryInterface::class,
            FoldersRepository::class
        );
        $this->app->singleton(
            PaymentsRepositoryInterface::class,
            PaymentsRepository::class
        );
        $this->app->singleton(
            RoomsRepositoryInterface::class,
            RoomsRepository::class
        );
        $this->app->singleton(
            UsersRepositoryInterface::class,
            UsersRepository::class
        );
        $this->app->singleton(
            VacationersRepositoryInterface::class,
            VacationersRepository::class
        );
    }
}
