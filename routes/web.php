<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeDislikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReplyReviewController;
use App\Http\Controllers\ReviewController;
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
    Route::get('/novel/{novel}', [NovelController::class,'show']);

    Route::post('/novel/show/create', [EpisodeController::class,'create'])->name('create.episode');
    Route::put('/novel/show/update/{id}', [EpisodeController::class,'update'])->name('edit.episode');
    Route::delete('/novel/show/delete/{id}', [EpisodeController::class,'delete']);

    Route::post('/novel/create', [NovelController::class,'create'])->name('create.novel');
    Route::put('/novel/update/{id}', [NovelController::class,'update']);
    Route::delete('/novel/delete/{id}', [NovelController::class,'delete']);

    Route::get('/genre', [GenreController::class,'genre']);
    Route::post('/genre/create', [GenreController::class,'create'])->name('create.genre');
    Route::put('/genre/update/{id}', [GenreController::class,'update'])->name('update.genre');
    Route::delete('/genre/delete/{id}', [GenreController::class,'delete'])->name('delete.genre');
}); 


Route::resource('/novels', UserNovelController::class);
// Route::get('/novels', [UserNovelController::class,'index']);
// Route::get('/novels/{id}', [UserNovelController::class,'show']);

Route::group(['middleware' => 'auth'], function () {
Route::get('/profiles', [ProfileController::class,'index']);
Route::get('/profiles/edit', [ProfileController::class,'edit']);
Route::put('/profiles/update/', [ProfileController::class,'update']);

Route::post('/reviews/create', [ReviewController::class, 'store']);
Route::post('/replyreviews/create', [ReplyReviewController::class, 'store']);

Route::post('/addFavorite/create', [FavoriteController::class, 'store'])->name('wishlist.store');
Route::resource('/favorite', FavoriteController::class);


Route::post('/addLike', [LikeDislikeController::class, 'like'])->name('add.like');
Route::post('/addDislike', [LikeDislikeController::class, 'dislike'])->name('add.dislike');

Route::post('/rating', [RatingController::class, 'store'])->name('rating.store');
});

Route::get('/novels/{novel}/{episode}', [UserEpisodeController::class,'show']);



Route::get('/register', [LoginController::class,'register'])->middleware('guest');
Route::post('/register', [LoginController::class,'store'])->middleware('guest');
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/login-admin', [AdminLoginController::class, 'index'])->name('login.admin')->middleware('guest');
Route::post('/login-admin', [AdminLoginController::class, 'login'])->middleware('guest');