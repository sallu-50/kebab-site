<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\Location;
use App\Models\MenuItem;
use App\Policies\OrderPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\LocationPolicy;
use App\Policies\MenuItemPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Order::class => OrderPolicy::class,
        Category::class => CategoryPolicy::class,
        Location::class => LocationPolicy::class,
        MenuItem::class => MenuItemPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate checks like `if (Auth::user()->can('manage users'))`
        Gate::before(function (User $user, string $ability) {
            if ($user->isSuperAdmin()) {
                return true;
            }
        });
    }
}
