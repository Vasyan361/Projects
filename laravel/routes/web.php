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

Route::get('/', 'HomeController@index');

Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/{album}', 'AlbumsController@show');

Route::get('/photos', 'PhotoController@index');
Route::get('/photos/{photo}', 'PhotoController@show');

Route::get('/comments', 'CommentsController@index');
Route::post('/comments', 'CommentsController@store');

Route::resource('/admin/albums', 'AdminAlbumsController');

Route::get('/admin/photos', 'AdminPhotoController@index');
Route::get('/admin/photos/create', 'AdminPhotoController@create');
Route::post('/admin/photos', 'AdminPhotoController@store');
Route::get('/admin/photos/{photo}', 'AdminPhotoController@destroy');

Route::get('/admin/comments', 'AdminCommentsController@index');
Route::get('/admin/comments/{comment}', 'AdminCommentsController@destroy');

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/logout', 'auth\LoginController@logout');
