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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/history', 'HomeController@history')->name('history');

Route::get('/team', 'HomeController@team')->name('team');

Route::get('/clearing', 'HomeController@clearing')->name('clearing');

Route::get('/cargo', 'HomeController@cargo')->name('cargo');

Route::get('/land', 'HomeController@land')->name('land');

Route::get('/air', 'HomeController@air')->name('air');

Route::get('/board', 'HomeController@board')->name('board');

Route::get('/sea', 'HomeController@sea')->name('sea');

Route::get('/warehouse', 'HomeController@warehouse')->name('warehouse');

Route::get('/logistics', 'HomeController@logistics')->name('logistics');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::get('/news', 'HomeController@news')->name('news');

Route::get('/contact', 'HomeController@contact')->name('contact');
