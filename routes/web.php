<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/profile', 'profile')->name('profile');
    Route::view('/admin', 'admin.dashboard')->middleware('role:admin')->name('admin.dashboard');
});
