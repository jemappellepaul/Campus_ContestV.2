<?php

/*Pages redirections*/

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('element', function () {
    return view('element');
});

Route::get('/generic', function () {
    return view('generic');
});

/*CSS redirection*/

/*Route::get('css', function () {
    return css('main');
});*/

/*Database pages redirection*/

Route::resource('contacts', 'ContactController');
Route::apiResource('contacts', 'ContactController');

Route::resource('books', 'BookController');
Route::apiResource('books', 'BookController');

/*Authentification routes*/

Auth::routes();

Route::get('connexion', 'HomeController@index')->name('connection');

Route::get('home', function () {
    return view('index');
});