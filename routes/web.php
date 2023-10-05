<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NovelController;
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


Route::get('/dashborad', function () {
    return view('welcome');
});



Route::get('/', [DashboardController::class,'index']);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class,'index']);
    Route::get('/novel', [NovelController::class, 'novel'])->name('novel');
}); 
