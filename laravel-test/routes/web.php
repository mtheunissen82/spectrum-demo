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
    return view('welcome');
});

// Route::resource('customers', 'CustomerController');
Route::get('/customers', 'CustomerController@index')->name('customer.overview');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers/create', 'CustomerController@store');
Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
Route::post('/customers/{customer}/edit', 'CustomerController@update');
