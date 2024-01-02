<?php
declare(strict_types=1);
namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Policies\ApiPolicy;
use App\Policies\BannersPolicy;
use App\Policies\BooksPolicy;
use App\Policies\CategoryBannersPolicy;
use App\Policies\OceanPolicy;
use App\Policies\OrdersPolicy;
use App\Policies\TripsPolicy;
use Database\Seeders\BannersSeeders;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        ApiPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();;


        Gate::resource('api', ApiPolicy::class);
    }
}
