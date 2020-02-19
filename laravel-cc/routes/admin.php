<?php

/*Specific routes only available for users authentified as admin*/

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::resource('contacts_dash', 'ContactController');

Route::resource('books', 'BookController');

Route::resource('members', 'MemberController');
