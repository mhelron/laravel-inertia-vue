<?php

use Illuminate\Support\Facades\Route;
Use Inertia\Inertia;

Route::get('/', function () {
    return inertia::render('Home');
});
