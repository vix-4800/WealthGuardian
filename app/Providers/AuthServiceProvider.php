<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Traits\HasFamily;
use App\Traits\HasOrganization;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->isAdmin();
        });

        Gate::define('have_organization', function () {
            return (User::useTrait(HasOrganization::class)) ?
                auth()->check() && auth()->user()->canHaveOrganization() :
                false;
        });

        Gate::define('have_family', function () {
            return (User::useTrait(HasFamily::class)) ?
                auth()->check() && auth()->user()->canHaveFamily() :
                false;
        });
    }
}
