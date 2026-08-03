<?php

use App\Http\Controllers\ProjeController;
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
    Route::get('/proje', [ProjeController::class, 'index'])->name('proje.index');
    Route::put('/proje/{proje}', [ProjeController::class, 'update'])->name('proje.update');
    Route::delete('/proje/{proje}', [ProjeController::class, 'destroy'])->name('proje.destroy');
    Route::get('/proje/{proje}/detay', [ProjeController::class, 'show'])->name('proje.show');
    Route::post('/proje/{proje}/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
    Route::put('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/teklifler', function(){return view('admin.teklifler');});
    Route::get('/finans', function(){return view('admin.finans');});
    Route::get('/ayarlar', function(){return view('admin.ayarlar');});
    Route::post('/proje-ekle',[ProjeController::class,'store'])->name('proje.store');
});
