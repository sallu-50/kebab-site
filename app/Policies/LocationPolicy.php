<?php

namespace App\Policies;

use App\Models\Location;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LocationPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole('super_admin', 'location_manager');
    }

    public function view(User $user, Location $location): bool
    {
        if ($user->isSuperAdmin()) {
            return true;
        }

        return $user->isLocationManager() && $user->location_id === $location->id;
    }

    public function create(User $user): bool
    {
        return $user->isSuperAdmin();
    }

    public function update(User $user, Location $location): bool
    {
        return $user->isSuperAdmin();
    }

    public function delete(User $user, Location $location): bool
    {
        return $user->isSuperAdmin();
    }

    public function restore(User $user, Location $location): bool
    {
        return $user->isSuperAdmin();
    }

    public function forceDelete(User $user, Location $location): bool
    {
        return $user->isSuperAdmin();
    }
}
