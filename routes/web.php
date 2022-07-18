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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/order', 'PagesController@order')->name('pages.order');
    Route::get('/createuser', 'PagesController@createuser')->name('pages.createuser');
    Route::get('/tech', 'PagesController@tech')->name('pages.tech');
    Route::get('/skin', 'PagesController@skin')->name('pages.skin');
});