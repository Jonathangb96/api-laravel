<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/tareas', 'App\Http\Controllers\TodosController@index')->name('todos');
Route::post('/tareas', 'App\Http\Controllers\TodosController@store')->name('todos.store');
Route::get('/tareas/{id}/edit', 'App\Http\Controllers\TodosController@show')->name('todos.edit'); 
Route::patch('/tareas/{id}', 'App\Http\Controllers\TodosController@update')->name('todos.update');
Route::delete('/tareas/{id}', 'App\Http\Controllers\TodosController@destroy')->name('todos-destroy');


Route::resource('categories', CategoriesController::class);





