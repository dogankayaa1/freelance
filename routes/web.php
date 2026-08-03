<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as ControllersAuthenticatedSessionController;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/logout', [ControllersAuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::view('/admin', 'admin.dashboard')->middleware('role:admin')->name('admin.dashboard');
    Route::get('/musteri', function(){return view('admin.musteri');});
    Route::get('/proje', function(){return view('admin.proje');});
    Route::get('/proje-detay', function(){return view('admin.proje-detay');});
    Route::get('/teklifler', function(){return view('admin.teklifler');});
    Route::get('/finans', function(){return view('admin.finans');});
});
