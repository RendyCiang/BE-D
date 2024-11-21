<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tutor');
});

Route::get('/tutor', function () {
    return view('tutor');
});