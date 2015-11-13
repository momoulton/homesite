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

Route::get('/about', function() {
    return "All about me";
});

Route::get('/books', function() {
    return "book time";
});

Route::get('/articles', function() {
    return "article time";
});

Route::get('/web', function() {
    return "web stuff";
});

Route::get('/sayers', function() {
    return "DLS here!";
});

Route::get('/ireland', function() {
    return "eire";
});

Route::get('/britain', function() {
    return "uk uk uk";
});

Route::get('/fun', function() {
    return "some kinda something";
});
