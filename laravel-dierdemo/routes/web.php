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

Route::get('/', function () {
    return view('layout.base');
});


// Create routes
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dier/create', 'DierController@create')->name('dier.create');
        Route::post('/dier/create', 'DierController@insert');

        // Update routes
        Route::get('/dier/{dier}/edit', 'DierController@edit')->name('dier.edit');
        Route::post('/dier/{dier}/edit', 'DierController@update');

        // Delete route
        Route::get('/dier/{dier}/delete', 'DierController@delete')->name('dier.delete');

        // Listing (read) routes
        Route::get('/dier/{dier}', 'DierController@show')->name('dier.show');
        Route::get('/dier', 'DierController@index')->name('dier.index');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
