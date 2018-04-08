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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/catalogue', 'HomeController@catalogue')->name('catalogue');
Route::get('/catalogue/{slug}', 'HomeController@detailItem')->name('detail.item');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/about', 'HomeController@aboutUs')->name('about.us');
