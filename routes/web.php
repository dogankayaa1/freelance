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
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware('role:admin')->name('admin.index');
    Route::get('/musteri', [\App\Http\Controllers\MusteriController::class, 'index'])->name('musteri.index');
    Route::post('/musteri', [\App\Http\Controllers\MusteriController::class, 'store'])->name('musteri.store');
    Route::put('/musteri/{musteri}', [\App\Http\Controllers\MusteriController::class, 'update'])->name('musteri.update');
    Route::delete('/musteri/{musteri}', [\App\Http\Controllers\MusteriController::class, 'destroy'])->name('musteri.destroy');
    Route::get('/proje', [ProjeController::class, 'index'])->name('proje.index');
    Route::put('/proje/{proje}', [ProjeController::class, 'update'])->name('proje.update');
    Route::delete('/proje/{proje}', [ProjeController::class, 'destroy'])->name('proje.destroy');
    Route::get('/proje/{proje}/detay', [ProjeController::class, 'show'])->name('proje.show');
    Route::post('/proje/{proje}/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
    Route::put('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/teklifler', [\App\Http\Controllers\TeklifController::class, 'index'])->name('teklifler.index');
    Route::post('/teklifler', [\App\Http\Controllers\TeklifController::class, 'store'])->name('teklifler.store');
    Route::put('/teklifler/{teklif}', [\App\Http\Controllers\TeklifController::class, 'update'])->name('teklifler.update');
    Route::delete('/teklifler/{teklif}', [\App\Http\Controllers\TeklifController::class, 'destroy'])->name('teklifler.destroy');
    Route::patch('/teklifler/{teklif}/onayla', [\App\Http\Controllers\TeklifController::class, 'approve'])->name('teklifler.approve');
    Route::get('/finans', [\App\Http\Controllers\FinansController::class, 'index'])->name('finans.index');
    Route::post('/finans', [\App\Http\Controllers\FinansController::class, 'store'])->name('finans.store');
    Route::get('/ayarlar', function(){return view('admin.ayarlar');});
    Route::post('/proje-ekle',[ProjeController::class,'store'])->name('proje.store');
});
