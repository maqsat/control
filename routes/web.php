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

Route::resource('project', 'ProjectController');
Route::resource('access', 'AccessController');
Route::resource('app', 'AppController');
Route::resource('costomer', 'CostomerController');
Route::resource('department', 'DepartmentController');
Route::resource('document', 'DocumentController');
Route::resource('source', 'SourceController');
Route::resource('status', 'StatusController');
Route::resource('type', 'TypeController');
