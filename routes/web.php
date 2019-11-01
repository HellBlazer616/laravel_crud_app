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

use App\Http\Controllers\ProjectController;

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', 'ProjectController@index');
Route::resource('/project', 'ProjectController');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/project/{project}/tasks', 'ProjectTasksController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
