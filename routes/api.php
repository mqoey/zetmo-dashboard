<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\NeighbourhoodController;
use App\Http\Controllers\API\NotificationController;
use App\Http\Controllers\API\TarrifController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\API\TokenController;

Route::get('tarrif', [TarrifController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('registerhome', [AuthController::class, 'registerhome']);
Route::get('neighbourhoods', [NeighbourhoodController::class, 'index']);
Route::post('clientneighbourhood', [NeighbourhoodController::class, 'store']);
Route::get('clientneighbourhood', [NeighbourhoodController::class, 'client']);
Route::get('tokens', [TokenController::class, 'getTokens']);
Route::post('tokens', [TokenController::class, 'useToken']);
Route::post('send-notification', [NotificationController::class, 'send']);
