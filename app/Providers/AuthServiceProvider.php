<?php
declare(strict_types=1);
namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Policies\ApiPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();


        Gate::before(function ($user) {
           if ($user->super_admin) {
               return true;
           }
        });
        Gate::resource('api', ApiPolicy::class);
        Gate::define('isSuperAdmin', [ApiPolicy::class, 'checkSuperAdmin']);
    }
}
