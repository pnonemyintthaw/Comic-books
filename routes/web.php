<?php

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

Route::get('/', function () {
    return view('welcome');
});

//backend route
// Route::middleware('role:admin')->group(function () {

Route::resource('category','CategoryController');

Route::resource('author','AuthorController');

Route::resource('book','BookController');

Route::resource('story','StoryController');

Route::resource('order', 'OrderController');

Route::post('confirm/{id}', 'OrderController@confirm')->name('order.confirm');

// });

//frontend

Route::get('/', "FrontendController@home" )->name('index');

Route::get('comiclist', "FrontendController@comiclist" )->name('comiclist');

Route::get('comicnew', "FrontendController@comicnew" )->name('new');

Route::get('freebook/{id}', 'FrontendController@freebook')->name('freebook');

Route::get('bookdetail/{id}', 'FrontendController@bookdetail')->name('bookdetail');

Route::get('bookbycategory/{id}', 'FrontendController@bookbycategory')->name('bookbycategory');

Route::get('signin', 'FrontendController@signin')->name('signin');

Route::get('signup', 'FrontendController@signup')->name('signup');

Route::resource('user', 'UserController');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cart','FrontendController@cart')->name('cart');


