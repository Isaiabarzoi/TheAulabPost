<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');

//Rotte che gestiscono gli articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/create', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

//Rotte per le ricerche
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');

// rotte per utente e invio mail
Route::get('/careers', [PublicController::class, 'careers']) -> name ('careers');
Route::post('/careers/submit', [PublicController::class, 'careersSubmit']) -> name ('careers.submit');


// rotta admin
Route::middleware('admin')-> group (function(){
    Route::get ('/admin/dashboard', [AdminController::class, 'dashboard'])-> name ('admin.dashboard');
});
