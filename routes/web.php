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
