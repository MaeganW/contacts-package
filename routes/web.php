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

Route::get('/', 'PagesController@home');
Route::get('/form', 'PagesController@form');
Route::get('/list', 'PagesController@list');
Route::get('/profile', 'PagesController@profile');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/list', function () {
    return view('list');
})->name('list');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');