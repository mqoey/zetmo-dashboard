<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientNeighbourhoodController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoadsheddingController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\NeighbourhoodController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TarrifController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use App\Models\ClientNeighbourhood;
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
    Route::resource('clientneighbourhood', ClientNeighbourhoodController::class);
    Route::resource('loadsheddings', LoadsheddingController::class);
    Route::get('tarrifs', [TarrifController::class, 'index'])->name('tarrifs');
    Route::post('tarrifs', [TarrifController::class, 'store'])->name('tarrifs');
    Route::get('notifications', [NotificationsController::class, 'index'])->name('notifications');
    Route::post('notifications', [NotificationsController::class, 'sendPush'])->name('notifications.store');
});

require __DIR__.'/auth.php';
