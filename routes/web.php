<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'posts.index')->name('home');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
