<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $viewAdminDashboard = Permission::firstOrCreate([
            'name' => 'admin.dashboard.view',
            'guard_name' => 'web',
        ]);

        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        $userRole = Role::firstOrCreate([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        $adminRole->syncPermissions([$viewAdminDashboard]);

        if (!app()->environment(['local', 'testing'])) {
            return;
        }

        $admin = User::updateOrCreate(
            ['email' => 'admin@example.test'],
            [
                'name' => 'Test Admin',
                'password' => Hash::make('password'),
            ],
        );
        $admin->syncRoles([$adminRole]);

        $regularUser = User::updateOrCreate(
            ['email' => 'user@example.test'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
            ],
        );
        $regularUser->syncRoles([$userRole]);
    }
}
