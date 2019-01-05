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


Route::get('roles','RoleController@index')->name('roles.index');


Route::get('roles/create','RoleController@create')->name('roles.create');
Route::post('roles/insert','RoleController@insert')->name('roles.insert');


Route::get('roles/{id}/edit','RoleController@edit')->name('roles.edit');
Route::put('roles/{id}/update','RoleController@update')->name('roles.update');
Route::delete('roles/{id}/delete','RoleController@delete')->name('roles.delete');


Route::resource('students','StudentController');