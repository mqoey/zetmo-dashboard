<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\NeighbourhoodController;
use App\Http\Controllers\TarrifController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\API\TokenController;

Route::get('tarrif', [TarrifController::class, 'api']);
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('registerhome', [AuthController::class, 'registerhome']);
Route::get('neighbourhoods', [NeighbourhoodController::class, 'index']);
Route::get('tokens', [TokenController::class, 'getTokens']);
Route::post('tokens', [TokenController::class, 'useToken']);
