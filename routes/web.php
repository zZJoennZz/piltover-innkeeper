<?php

use App\Enums\ScheduleBlockType;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

use App\Models\ScheduleBlock;
use Illuminate\Support\Str;

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

Route::get('/', [AppController::class, 'index']);
