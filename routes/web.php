<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TarrifController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::resource('clients', ClientController::class);
    Route::resource('tokens', TokenController::class);
    Route::get('tarrifs', [TarrifController::class, 'index'])->name('tarrifs');
});

require __DIR__.'/auth.php';
