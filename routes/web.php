<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontEndController;
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

Auth::routes(['register'=>false, 'reset'=>false]);


// Front End Routes
Route::get('/', 'App\Http\Controllers\FrontEndController@home')->name('website');

Route::get('/about', 'App\Http\Controllers\FrontEndController@about')->name('website');

Route::get('/category', 'App\Http\Controllers\FrontEndController@category')->name('website');

Route::get('/contact', 'App\Http\Controllers\FrontEndController@contact')->name('website');

Route::get('/post', 'App\Http\Controllers\FrontEndController@post')->name('website');




//Admin Route
Route::group(['prefix'=>'admin/','middleware'=>'auth'],function(){
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin');

    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
});

