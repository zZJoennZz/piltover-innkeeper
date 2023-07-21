<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Resource\RoomTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Hello";
});

Route::middleware(['guest'])->group(function() {
    Route::get('/user-login', [UserController::class, 'login'])->name('user-login.show');
    Route::post('/user-login', [UserController::class, 'authenticate'])->name('user-login.perform');
});


Route::get('/dashboard', [AppController::class, 'index'])->name('dashboard.show');
Route::get('/appointments', [AppController::class, 'appointments']);
Route::middleware(['user'])->group(function () {
    Route::get('/settings', [AppController::class, 'settings']);
    Route::post('/room-type', [RoomTypeController::class, 'store']);
    
    //Auth
    Route::post('/user-logout', [UserController::class, 'logout'])->name('user-logout.perform');
});
