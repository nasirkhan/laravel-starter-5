<?php
/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/

Route::get('/', 'BackendController@index')->name('home');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('posts', 'PostController');
