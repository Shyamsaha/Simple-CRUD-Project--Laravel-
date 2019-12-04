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
Route::get('/student','StudentController@student');
Route::post('/student/store','StudentController@store')->name('student.store');
Route::get('/student/view','StudentController@view');
Route::get('/student/{id}/update','StudentController@update')->name('student.update');
Route::post('/student/{id}/updated','StudentController@updated')->name('student.updated');
Route::get('/student/{id}/delete','StudentController@delete')->name('student.delete');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

