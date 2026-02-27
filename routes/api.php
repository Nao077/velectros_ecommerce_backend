<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    // Route::get('/users', [UserController::class, 'index']);
    // Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/logout', [UserController::class, 'logout']);
    
    //Clients
    Route::post('/get-clients', [ClientController::class, 'index']);
    Route::post('/store-client', [ClientController::class, 'store']);
    Route::get('/show-client/{id}', [ClientController::class, 'show']);
    Route::put('/update-client/{id}', [ClientController::class, 'update']);
    Route::delete('/delete-client/{id}', [ClientController::class, 'destroy']);

});
