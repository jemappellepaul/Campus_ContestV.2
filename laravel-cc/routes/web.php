<?php
Route::get('/', function () {
    return view('index');
});


Route::get('/generic', function () {
    return view('generic');
})->name("commander");

/*Route::resource('generic', 'Controller');
Route::apiResource('generic', 'Controller');*/

Route::resource('contacts', 'ContactController');
Route::apiResource('contacts', 'ContactController');

Route::resource('books', 'BookController');
Route::apiResource('books', 'BookController');