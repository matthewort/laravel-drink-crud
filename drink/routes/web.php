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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drinks', 'DrinkController@index') 
-> name('drinks-index');

Route::get('/show/{id}', 'DrinkController@show') 
-> name('drink-show');

Route::get('/create', 'DrinkController@create') 
-> name('drink-create');
Route::post('/store', 'DrinkController@store') 
-> name('drink-store');

Route::get('/edit/{id}', 'DrinkController@edit') 
-> name('drink-edit');
Route::post('/update/{id}', 'DrinkController@update') 
-> name('drink-update');

Route::get('/delete/{id}', 'DrinkController@delete') 
-> name('drink-delete');

