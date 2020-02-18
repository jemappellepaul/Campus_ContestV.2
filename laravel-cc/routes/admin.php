<?php
Route::get('index', function(){
    return view('element');
})->name('admin.dashboard');