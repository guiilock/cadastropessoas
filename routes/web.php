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

use App\Http\Controllers\cadastrocon;
use App\Http\Controllers\Controller;

Route::get('/', 'cadastrocon@index');
Route::get('/create', 'cadastrocon@create');
Route::get('/pessoas', 'cadastrocon@index');
Route::post('/cadastrar', 'cadastrocon@store');
Route::get('pessoas/edit/{id}', 'cadastrocon@edit');
