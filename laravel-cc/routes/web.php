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

Route::get('generic', function () {
    return view('generic');
});

/*Database pages redirection*/

Route::resource('contacts', 'ContactController');

Route::resource('borrows', 'BorrowController');

/*Authentification routes*/

Auth::routes();

Route::get('connexion', 'HomeController@index');

Route::get('home', function () {
    return view('index');

});