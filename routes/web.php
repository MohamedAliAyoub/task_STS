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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('BackEnd')->prefix('admin')->middleware('admin')->group(function () {

    Route::get('home', 'HomeController@index')->name('admin.home');
    Route::get('clients', 'HomeController@clients')->name('admin.clients');
    Route::get('delete', 'HomeController@delete')->name('admin.delete');



    //routes of pakedge
    // List all alrticle
		// Export to excel
		Route::get('/articles/exportExcel','HomeController@exportExcel')->name('excel');
		// Export to csv
		Route::get('/articles/exportCSV','HomeController@exportCSV')->name('csv');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
