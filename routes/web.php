<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\user\EpisodeController as UserEpisodeController;
use App\Http\Controllers\user\NovelController as UserNovelController;

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
Route::get('/', [HomeController::class,'index']);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class,'index']);
    Route::get('/novel', [NovelController::class,'novel']);
    Route::get('/novel/{id}', [NovelController::class,'show']);
    Route::post('/novel/show/create', [EpisodeController::class,'create'])->name('create.episode');
    Route::post('/novel/show/delete/{id}', [EpisodeController::class,'delete']);
    Route::post('/novel/show/update/{id}', [EpisodeController::class,'update'])->name('edit.episode');
    Route::post('/novel/create', [NovelController::class,'create'])->name('create.novel');
    Route::post('/novel/delete/{id}', [NovelController::class,'delete']);
    Route::post('/novel/update/{id}', [NovelController::class,'update']);
    Route::get('/genre', [GenreController::class,'genre']);
    Route::post('/genre/create', [GenreController::class,'create'])->name('create.genre');
    Route::post('/genre/delete/{id}', [GenreController::class,'delete']);
    Route::post('/genre/update/{id}', [GenreController::class,'update']);
}); 


Route::resource('/novels', UserNovelController::class);
// Route::get('/novels', [UserNovelController::class,'index']);
// Route::get('/novels/{id}', [UserNovelController::class,'show']);

Route::get('/novels/{novel}/{episode}', [UserEpisodeController::class,'show']);



Route::get('/authenticate', [LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/register', [LoginController::class,'store'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/login-admin', [AdminLoginController::class, 'index'])->name('login.admin')->middleware('guest');
Route::post('/login-admin', [AdminLoginController::class, 'login'])->middleware('guest');