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

Auth::routes(['register' => false]);
Route::get('/users', 'UserController@index')->name('user.index');
Route::get('/home', 'HomeController@index')->name('user.index');



Route::resource('users', 'UserController');


Route::get('/users/{user}/edit', 'UserController@edit');
//Route::patch('/users/{user}','UserController@update');

//Route::delete('/users/{user}','UserController@delete');
Route::patch('/users/{user}', 'UserController@update');
Route::get('/users/{user}', 'UserController@destroy');
Route::get('search', 'UserController@search');

Route::get('/export_excel', 'ExportController@index');

Route::get('/export_excel/excel', 'ExportController@excel')->name('export_excel.excel');


Route::get('sort', 'HomeController@sort');








