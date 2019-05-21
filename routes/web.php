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

Route::get('/', 'ContactsController@index');
Route::get('/add', 'ContactsController@addView');
Route::post('/add', 'ContactsController@addContact');
Route::get('/contact/{id}', 'ContactsController@details');
Route::get('/contact/{id}/edit', 'ContactsController@editView');
Route::post('/contact/{id}/edit', 'ContactsController@edit');
Route::get('/contact/{id}/delete', 'ContactsController@delete');

Route::get('/contact/{contact_id}/add_phone', 'PhonesController@addForm');
Route::post('/contact/{contact_id}/add_phone', 'PhonesController@add');
Route::get('/phone/{id}/delete', 'PhonesController@delete');

Route::get('/contact/{contact_id}/add_website', 'WebsiteController@addForm');
Route::post('/contact/{contact_id}/add_website', 'WebsiteController@add');
Route::get('/website/{id}/delete', 'WebsiteController@delete');