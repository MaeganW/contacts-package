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

// defaults to /contacts
Route::get('/', 'Contacts\ContactsController@index');

// this is shorthand for the below
// Route::resource('contacts', 'Contacts\ContactsController');

// Get /contacts (index)
Route::get('/contacts', 'Contacts\ContactsController@index');
// POST /contacts (store)
Route::post('/contacts', 'Contacts\ContactsController@store');
// GET /contacts/create (create)
Route::get('/contacts/create', 'Contacts\ContactsController@create');
// GET /contacts/1 (show)
Route::get('/contacts/{contact}', 'Contacts\ContactsController@show');
// GET /contacts/1/edit (edit)
Route::get('/contacts/{contact}/edit', 'Contacts\ContactsController@edit');
// PATCH /contacts/1 (update)
Route::patch('/contacts/{contact}', 'Contacts\ContactsController@update');
// DELETE /contacts/1 (destroy)
Route::delete('/contacts/{contact}', 'Contacts\ContactsController@destroy');