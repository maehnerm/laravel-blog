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

Route::get('/', 'PostController@frontpage')->name('frontpage');
Route::get('/articles/{post}', 'PostController@show_front')->name('show-front');

Auth::routes();



Route::prefix('admin')->group( function(){
	//MAIN
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	//POSTS
	Route::get('/posts', 'PostController@index')->name('posts-index');
	Route::get('/posts/create', 'PostController@create')->name('posts-create');
	Route::post('/posts', 'PostController@store')->name('posts-store');
	Route::get('/posts/{id}', 'PostController@show')->name('posts-show');
	Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts-edit');
	Route::patch('/posts/{id}', 'PostController@update')->name('posts-update');
	Route::delete('/posts/{id}/delete', 'PostController@destroy')->name('posts-destroy');

	//COMMENTS
	Route::get('/comments', 'CommentController@index')->name('comments-index');
	Route::post('/comments/{post_id}', 'CommentController@store')->name('comments-store');
	Route::get('/comments/{id}', 'CommentController@show')->name('comments-show');
});
