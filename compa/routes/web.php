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

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'LandingController@index')->name('landing.index');
    Route::get('profile', 'LandingController@profile')->name('profile.index');
});


Auth::routes();;


Route::group(['prefix' => 'admin', 'middleware' => ['backend:admin,manager']], function () {
    Route::namespace('Backend')->group(function () {
        Route::get('/', 'AdminController@Index')->name('dashboard.index');
//        User Section
        Route::resource('users', 'UserController');

    });
    Route::namespace('Api')->group(function () {
        Route::post('allRoles', 'ApiController@getAllRoles')->name('ajax.roles.data');
        Route::post('allUsers', 'DatatablesController@getAllUser')->name('dt.users.data');

    });

});


