<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\AuthController;


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


//Auth
Route::get('/', [AuthController::class,'login'])->name('login');
Route::post('/', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

//Dashboard
Route::get('/Dashboard', [BendaharaController::class, 'index'])->middleware('auth');