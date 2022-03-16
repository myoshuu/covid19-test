<?php

use App\Http\Controllers\CovidController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CovidController::class, 'index']);
Route::get('/create', [CovidController::class, 'create']);
Route::post('/store', [CovidController::class, 'store']);
Route::get('/show/{id}', [CovidController::class, 'show']);
Route::post('/update/{id}', [CovidController::class, 'update']);
Route::get('/delete/{id}', [CovidController::class, 'destroy']);
