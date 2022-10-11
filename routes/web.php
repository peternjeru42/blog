<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::get('/todos', 'App\Http\Controllers\TodosController@index');
Route::get('/todos/{id}', 'App\Http\Controllers\TodosController@show');
/*
---Route for creating new todo
*/
Route::get('/new-todos', 'App\Http\Controllers\TodosController@create');
/*
---Route for storing new todo to the db
*/
Route::post('/store-todos', 'App\Http\Controllers\TodosController@store');

Route::get('/edit-todos/{id}', 'App\Http\Controllers\TodosController@edit');

Route::post('update-todos/{id}', 'App\Http\Controllers\TodosController@update');

Route::get('/delete-todos/{id}', 'App\Http\Controllers\TodosController@delete');