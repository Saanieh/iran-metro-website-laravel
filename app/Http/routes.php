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

Route::get('/', function () {
    return view('index')->with('title', 'ایران مترو');
});

Route::get('/contact-us', 'ContactUsController@index');

Route::post('/contact-us', 'ContactUsController@post');

Route::get('/about', function () {
    return view('about')->with('title', 'درباره ما');
});