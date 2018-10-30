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

Route::get('/', 'ArticleController@index')->name('article.index');
Route::get('/create', 'ArticleController@create')->name('article.create');
Route::post('/store', 'ArticleController@store')->name('article.store');
Route::get('/{article}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('/{article}/update', 'ArticleController@update')->name('article.update');
Route::delete('/{article}/delete', 'ArticleController@destroy')->name('article.destroy');

Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');