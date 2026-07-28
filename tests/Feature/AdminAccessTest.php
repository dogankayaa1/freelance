<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;

uses(RefreshDatabase::class);

test('an admin can view the admin dashboard', function () {
    $admin = User::factory()->create();
    $admin->assignRole(Role::create(['name' => 'admin']));

    $this->actingAs($admin)
        ->get('/admin')
        ->assertOk()
        ->assertSee('Yönetim paneli');
});

test('a regular user cannot view the admin dashboard', function () {
    $regularUser = User::factory()->create();
    $regularUser->assignRole(Role::create(['name' => 'user']));

    $this->actingAs($regularUser)
        ->get('/admin')
        ->assertForbidden();
});
