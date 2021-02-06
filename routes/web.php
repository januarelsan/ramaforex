<?php

use Illuminate\Support\Facades\Route;
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
Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/blog/article/detail/{id}', [ArticleController::class, 'show'])->name('blog.detail.show');
Route::get('/blog/article/list', [ArticleController::class, 'list'])->name('blog.list');
Route::get('/home', 'HomeController@index')->name('home');