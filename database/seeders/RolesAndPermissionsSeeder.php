<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create permissions
        Permission::create(['name' => 'manage locations']);
        Permission::create(['name' => 'manage orders']);
        Permission::create(['name' => 'manage products']);
        Permission::create(['name' => 'view reports']);

        // Create roles and assign existing permissions
        $superAdminRole = Role::create(['name' => 'super_admin']);
        $superAdminRole->givePermissionTo(Permission::all());

        $locationManagerRole = Role::create(['name' => 'location_manager']);
        $locationManagerRole->givePermissionTo(['manage orders', 'manage products', 'view reports']);

        $customerRole = Role::create(['name' => 'customer']);

        // Create a super admin user
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'role' => User::ROLE_SUPER_ADMIN,
            ]
        );
        $user->assignRole('super_admin');

        // Create a location manager user
        $user = User::firstOrCreate(
            ['email' => 'manager@example.com'],
            [
                'name' => 'Location Manager',
                'password' => bcrypt('password'),
                'role' => User::ROLE_LOCATION_MANAGER,
                'location_id' => 1, // Assign to Location A
            ]
        );
        $user->assignRole('location_manager');
    }
}
