<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('website.index');
});

Route::get('/registration-flow', function () {
    return view('website.registration-flow');
});

Route::get('/registration-form', function () {
    return view('website.registration-form');
});

Route::get('/forgot-password', function () {
    return view('components.website.forgot-password');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
