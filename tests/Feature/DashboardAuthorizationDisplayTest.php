<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

test('the dashboard shows the authenticated users role and permissions', function () {
    $permission = Permission::create(['name' => 'admin.dashboard.view']);
    $adminRole = Role::create(['name' => 'admin']);
    $adminRole->givePermissionTo($permission);

    $admin = User::factory()->create();
    $admin->assignRole($adminRole);

    $this->actingAs($admin)
        ->get('/dashboard')
        ->assertOk()
        ->assertSee('Yetkileriniz')
        ->assertSee('admin')
        ->assertSee('admin.dashboard.view')
        ->assertSee('Yönetim paneli');
});
