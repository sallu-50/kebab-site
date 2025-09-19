<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole('super_admin', 'location_manager');
    }

    public function view(User $user, Order $order): bool
    {
        if ($user->isSuperAdmin()) {
            return true;
        }

        if ($user->isLocationManager() && $user->location_id) {
            return $order->orderItems->contains(function ($item) use ($user) {
                return $item->menuItem->locations->contains('id', $user->location_id);
            });
        }

        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, Order $order): bool
    {
        if ($user->isSuperAdmin()) {
            return true;
        }

        if ($user->isLocationManager() && $user->location_id) {
            return $order->orderItems->contains(function ($item) use ($user) {
                return $item->menuItem->locations->contains('id', $user->location_id);
            });
        }

        return false;
    }

    public function delete(User $user, Order $order): bool
    {
        return $user->isSuperAdmin();
    }

    public function restore(User $user, Order $order): bool
    {
        return $user->isSuperAdmin();
    }

    public function forceDelete(User $user, Order $order): bool
    {
        return $user->isSuperAdmin();
    }
}
