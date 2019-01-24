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

Route::namespace('Frontend')->group(function(){
    Route::get('/', 'MainController@landing')->name('landing');
    Route::get('about-us', 'MainController@about')->name('about');
    Route::get('our-team', 'MainController@ourTeam')->name('ourteam');
    Route::get('contact-us', 'MainController@contact')->name('contact');
    Route::post('contact-us', 'MainController@contactPost')->name('contactPost');

    Route::get('tours', 'MainController@tourIndex')->name('tour.index');
    Route::get('tours/{slug}', 'MainController@tourDetail')->name('tour.detail');

    Route::get('destinations', 'MainController@destinationIndex')->name('destination.index');
    Route::get('destinations/{slug}', 'MainController@destinationDetail')->name('destination.detail');

    Route::get('categories', 'MainController@categoriesIndex')->name('category.index');
    Route::get('categories/{slug}', 'MainController@categoriesDetail')->name('category.detail');

    Route::get('blogs', 'MainController@blogIndex')->name('blog.index');
    Route::get('blogs/recents', 'MainController@blogIndex')->name('blog.recent');
    Route::get('blogs/{slug}', 'MainController@blogDetail')->name('blog.detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
});
