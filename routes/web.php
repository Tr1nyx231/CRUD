<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PersonalController::class, 'base']);

Route::get('/personal', [PersonalController::class, 'index']);
Route::get('/personal/create', [PersonalController::class, 'create']);
Route::get('/personal/update', [PersonalController::class, 'update']);