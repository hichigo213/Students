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

Route::resource('groups', 'GroupController');
Route::resource('students', 'StudentController');
Route::resource('marks', 'MarkController');
Route::resource('subjects', 'SubjectController');
Route::resource('photos', "PhotoController");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
