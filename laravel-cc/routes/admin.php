<?php

/*Spécific routes only for available for users authentified as admin*/

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::resource('contacts_dash', 'ContactController');
Route::apiResource('contacts_dash', 'ContactController');

Route::resource('books', 'BookController');
Route::apiResource('books', 'BookController');

Route::resource('members', 'MemberController');
Route::apiResource('members', 'MemberController');