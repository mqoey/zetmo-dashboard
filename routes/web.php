<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoadsheddingController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\NeighbourhoodController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TarrifController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::resource('clients', ClientController::class);
    Route::resource('tokens', TokenController::class);
    Route::resource('municipalities', MunicipalityController::class);
    Route::resource('areas', AreaController::class);
    Route::resource('stages', StageController::class);
    Route::resource('neighbourhoods', NeighbourhoodController::class);
    Route::resource('loadsheddings', LoadsheddingController::class);
    Route::get('tarrifs', [TarrifController::class, 'index'])->name('tarrifs');
    Route::post('tarrifs', [TarrifController::class, 'store'])->name('tarrifs');
});

require __DIR__.'/auth.php';
