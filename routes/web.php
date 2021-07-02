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

Route::get('/', 'BlogController@showList')->name('list');

Route::get('/blog/edit/{id}', 'BlogController@showEdit')->name('edit');
Route::post('/blog/update', 'BlogController@exeUpdate')->name('update');

Route::get('/blog/create', 'BlogController@showCreate')->name('create');
Route::post('/blog/store', 'BlogController@exeStore')->name('store');

Route::post('/blog/delete/{id}', 'BlogController@exeDelete')->name('delete');

Route::get('/blog/{id}', 'BlogController@showContent')->name('content');