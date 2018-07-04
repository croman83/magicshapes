<?php

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::get('/', function () {
        return view('pages.main');
    })->name('main');
    Route::get('/portfolio', function () {
        return view('pages.portfolio');
    })->name('portfolio');
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');
    Route::get('/contacts', function () {
        return view('pages.contacts');
    })->name('contacts');

    Route::get('/news', 'BaseController@posts')->name('posts-list');

    Route::get('/news/{slug}', 'BaseController@post')->name('post');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
