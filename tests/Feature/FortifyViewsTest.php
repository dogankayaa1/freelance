<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('the registration page is available', function () {
    $this->get('/register')->assertOk();
});

test('the authentication form pages are available', function () {
    $this->get('/')->assertOk();
    $this->get('/forgot-password')->assertOk();
    $this->get('/reset-password/example-token?email=user@example.com')->assertOk();
});

test('guests are redirected to login when visiting the profile page', function () {
    $this->get('/profile')->assertRedirect(route('login'));
});

test('a registered user receives the default user role', function () {
    $this->post('/register', [
        'name' => 'New User',
        'email' => 'new-user@example.test',
        'password' => 'password',
        'password_confirmation' => 'password',
    ])->assertRedirect('/dashboard');

    expect(\App\Models\User::where('email', 'new-user@example.test')->firstOrFail()->hasRole('user'))->toBeTrue();
});
