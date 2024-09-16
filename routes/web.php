<?php

use Illuminate\Support\Facades\Route;
Use Inertia\Inertia;

Route::get('/', function () {
    return inertia::render('Home');
});

//              URL, COMPONENT, DATA
Route::inertia('/about', 'About', ['user' => 'Mhel']);