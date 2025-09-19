<?php

namespace App\Policies;

use App\Models\MenuItem;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MenuItemPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole('super_admin', 'location_manager');
    }

    public function view(User $user, MenuItem $menuItem): bool
    {
        return $user->hasAnyRole('super_admin', 'location_manager');
    }

    public function create(User $user): bool
    {
        return $user->isSuperAdmin();
    }

    public function update(User $user, MenuItem $menuItem): bool
    {
        return $user->isSuperAdmin();
    }

    public function delete(User $user, MenuItem $menuItem): bool
    {
        return $user->isSuperAdmin();
    }

    public function restore(User $user, MenuItem $menuItem): bool
    {
        return $user->isSuperAdmin();
    }

    public function forceDelete(User $user, MenuItem $menuItem): bool
    {
        return $user->isSuperAdmin();
    }
}
