<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole('super_admin', 'location_manager');
    }

    public function view(User $user, Category $category): bool
    {
        return $user->hasAnyRole('super_admin', 'location_manager');
    }

    public function create(User $user): bool
    {
        return $user->isSuperAdmin();
    }

    public function update(User $user, Category $category): bool
    {
        return $user->isSuperAdmin();
    }

    public function delete(User $user, Category $category): bool
    {
        return $user->isSuperAdmin();
    }

    public function restore(User $user, Category $category): bool
    {
        return $user->isSuperAdmin();
    }

    public function forceDelete(User $user, Category $category): bool
    {
        return $user->isSuperAdmin();
    }
}
