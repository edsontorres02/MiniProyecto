<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', 'MoviesController@MoviesStore')->name('MoviesStore');

Route::get('/movies/{id}', 'MoviesController@Details')->name('MoviesDetails');

Route::post('/movies/comment', 'MoviesController@AddComment')->name('MoviesComments');

//admin

Route::get('/admin/movies', 'MoviesController@Index');

Route::get('/admin/movies/create', "MoviesController@Create");

Route::post('/admin/movies/create', "MoviesController@Store");

Route::get('/admin/movies/delete/{id}', "MoviesController@Delete");

Route::get('/admin/movies/edit/{id}', "MoviesController@Edit");

Route::get('/admin/movies/{id}', "MoviesController@Show");

Route::post('/admin/movies/edit', "MoviesController@Update");

Route::delete('/admin/movies/delete', "MoviesController@Remove");


Route::get('/videogames', 'VideogamesController@VideogamesStore')->name('VideogamesStore');

Route::get('/videogames/{id}', 'VideogamesController@Details')->name('VideogamesDetails');

Route::post('/videogames/comment', 'VideogamesController@AddComment')->name('VideogamesComments');

//admin

Route::get('/admin/videogames', 'VideogamesController@Index');

Route::get('/admin/videogames/create', "VideogamesController@Create");

Route::post('/admin/videogames/create', "VideogamesController@Store");

Route::get('/admin/videogames/delete/{id}', "VideogamesController@Delete");

Route::get('/admin/videogames/edit/{id}', "VideogamesController@Edit");

Route::get('/admin/videogames/{id}', "VideogamesController@Show");

Route::post('/admin/videogames/edit', "VideogamesController@Update");

Route::delete('/admin/videogames/delete', "VideogamesController@Remove");


Route::get('/dogs', 'DogsController@dogsStore')->name('DogsStore');

Route::get('/dogs/{id}', 'DogsController@Details')->name('DogsDetails');

Route::post('/dogs/comment', 'DogsController@AddComment')->name('DogsComments');

//admin

Route::get('/admin/dogs', 'DogsController@Index');

Route::get('/admin/dogs/create', "DogsController@Create");

Route::post('/admin/dogs/create', "DogsController@Store");

Route::get('/admin/dogs/delete/{id}', "DogsController@Delete");

Route::get('/admin/dogs/edit/{id}', "DogsController@Edit");

Route::get('/admin/dogs/{id}', "DogsController@Show");

Route::post('/admin/dogs/edit', "DogsController@Update");

Route::delete('/admin/dogs/delete', "DogsController@Remove");


Route::get('/mongodb', function () {
    return view('mongodb');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

