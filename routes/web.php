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

Route::get('/', 'UserController@UserList');

Route::get('/users', 'UserController@ShowUserlist');

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/e/create', 'ExistsController@create');
Route::post('/e', 'ExistsController@store');

Route::get('/g/create', 'GenreController@create');
Route::post('/g', 'GenreController@store');
Route::get('/genres', 'GenreController@GenreList');

Route::get('/p/create', 'PostsController@create');

Route::get('/p/delete/{post}', 'PostsController@destroy');

Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::put('/profile/{user}', 'ProfilesController@update')->name('profile.update');


