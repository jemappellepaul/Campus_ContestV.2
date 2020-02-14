<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', 'ContactController');
Route::apiResource('contacts', 'ContactController');

Route::resource('books', 'BookController');
Route::apiResource('books', 'BookController');