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

Route::get('/admin', function () {
    return view('admin.master');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::prefix('category')->name('category.')->group(function(){
        Route::get('list','CategoryController@list')->name('list');
        Route::get('create','CategoryController@create')->name('create');
        Route::post('store','CategoryController@store')->name('store');
        Route::get('edit/{id}','CategoryController@edit')->name('edit');
        Route::post('update/{id}','CategoryController@update')->name('update');
        Route::get('delete/{id}','CategoryController@destroy')->name('destroy');
    });
    Route::prefix('author')->name('author.')->group(function(){
        Route::get('list','AuthorController@list')->name('list');
        Route::get('create','AuthorController@create')->name('create');
        Route::post('store','AuthorController@store')->name('store');
        Route::get('edit/{id}','AuthorController@edit')->name('edit');
        Route::post('update/{id}','AuthorController@update')->name('update');
        Route::get('delete/{id}','AuthorController@destroy')->name('destroy');
    });
});