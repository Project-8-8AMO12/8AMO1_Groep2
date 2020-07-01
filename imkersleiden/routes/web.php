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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//admin home

Route::get('/home', 'HomeController@index')->name('home');

//user routes

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/users/delete/{id}', ['uses' => 'UsersController@delete'])->name('delete_user');

Route::get('/users/single/{id}', ['uses' => 'UsersController@user'])->name('user');

Route::get('/users/new', 'UsersController@newUser')->name('new_user');

Route::post('/users/new/create', 'UsersController@create')->name('create_user');

Route::post('/users/edit/{id}', ['uses' => 'UsersController@edit'])->name('edit_user');

//cursus routes

Route::get('/cursussen', 'CursusController@index')->name('cursussen');
