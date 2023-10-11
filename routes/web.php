<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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
Route::get('/', [DashboardController::class,'index']);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:admin'], function () {
    
}); 

Route::get('dashboard/novel', [NovelController::class,'novel']);
Route::post('/novel/create', [NovelController::class,'create'])->name('create');
Route::post('/novel/delete/{id}', [NovelController::class,'delete']);
Route::post('/novel/update/{id}', [NovelController::class,'update']);



Route::get('/dashboard/genre', [GenreController::class,'genre']);

Route::get('/authenticate', [LoginController::class,'index']);