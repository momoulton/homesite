<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');

Route::get('/about', 'AboutController@getIndex');

Route::get('/books', 'BooksController@getIndex');

Route::get('/articles', 'ArticlesController@getIndex');

Route::get('/web', 'WebController@getIndex');

Route::get('/sayers', 'SayersController@getIndex');

Route::get('/ireland', 'IrelandController@getIndex');

Route::get('/britain', 'BritainController@getIndex');

Route::get('/fun', 'FunController@getIndex');

Route::get('/blog', 'BlogController@getIndex');
