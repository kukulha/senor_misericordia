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

Auth::routes();

Route::get('/', 'Web\PagesController@index')->name('home');
Route::get('/eventos', 'Web\PagesController@events')->name('events');
Route::get('/evangelios', 'Web\PagesController@gospels')->name('gospels');
Route::get('/evento/{slug}', 'Web\PagesController@event')->name('event');
Route::get('/evangelio/{slug}', 'Web\PagesController@gospel')->name('gospel');

//Admin
Route::resource('events', 'Admin\EventController');
Route::resource('gospels', 'Admin\GospelController');
