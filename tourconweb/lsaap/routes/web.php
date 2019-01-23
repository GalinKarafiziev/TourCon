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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/account','PagesController@account');
//Route::get('/tickets','PagesController@tickets');
Route::get('/login','PagesController@login');
Route::get('/buy','PagesController@buy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ticket/{ticket}', 'TicketController@show')->name('ticket.show');
Route::resource('orders', 'OrderController');
Route::resource('tickets', 'TicketController');
Route::resource('users', 'UserController');
Route::resource('campingspots', 'CampingspotController');
Route::post('/send', 'EmailController@index');
