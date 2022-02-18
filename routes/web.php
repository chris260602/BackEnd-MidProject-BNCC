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

Route::get('/', 'App\Http\Controllers\AppController@index');
Route::get('/create', 'App\Http\Controllers\AppController@navigateCreatePage');
Route::post('/create', 'App\Http\Controllers\AppController@createBook');
Route::get('/edit/{id}', 'App\Http\Controllers\AppController@navigateEditPage');
Route::put('edit/{id}', 'App\Http\Controllers\AppController@editBook');
Route::delete('/delete/{id}', 'App\Http\Controllers\AppController@deleteBook');
