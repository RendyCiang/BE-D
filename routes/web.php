<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('homePage');
});

Route::get('/about', function () {
    return view('aboutPage');
});