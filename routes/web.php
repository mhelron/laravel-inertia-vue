<?php

use Illuminate\Support\Facades\Route;

//              URL, COMPONENT, DATA
Route::inertia('/', 'Home')->name('home');

Route::inertia('/register', 'Auth/Register')->name('register');