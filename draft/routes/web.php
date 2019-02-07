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

Route::get('/', 'FrontendController@landing')->name('landing');
Route::get('about-us', 'FrontendController@about')->name('about');
Route::get('our-team', 'FrontendController@ourTeam')->name('ourteam');
Route::get('contact-us', 'FrontendController@contact')->name('contact');
Route::post('contact-us', 'FrontendController@contactPost')->name('contactPost');

Route::get('tours', 'FrontendController@tourIndex')->name('tour.index');
Route::get('tours/{slug}', 'FrontendController@tourDetail')->name('tour.detail');

Route::get('packages', 'FrontendController@tourIndex')->name('package.index');
Route::get('packages/{slug}', 'FrontendController@tourDetail')->name('package.detail');

Route::get('destinations', 'FrontendController@destinationIndex')->name('destination.index');
Route::get('destinations/{slug}', 'FrontendController@destinationDetail')->name('destination.detail');

Route::get('categories', 'FrontendController@categoriesIndex')->name('category.index');
Route::get('categories/{slug}', 'FrontendController@categoriesDetail')->name('category.detail');

Route::get('blogs', 'FrontendController@blogIndex')->name('blog.index');
Route::get('blogs/promotion', 'FrontendController@promotionIndex')->name('blog.promotion');
Route::get('blogs/news', 'FrontendController@newsIndex')->name('blog.news');
Route::get('blogs/{slug}', 'FrontendController@blogDetail')->name('blog.detail');

Auth::routes();

Route::post('blogs/comment', 'Utility\CommentController@store')->name('comment.add');
Route::post('blogs/reply', 'Utility\CommentController@replyStore')->name('reply.add');

Route::get('/home', 'HomeController@index')->name('home');
