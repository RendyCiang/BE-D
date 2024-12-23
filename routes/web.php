<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;


Route::get('/layout', function () {
    return view('layout');
});

Route::get('/about', function () {
    return view('aboutPage');
});
Route::get('/', [BookController::class, 'getHomePage']);
Route::get('/create-book', [BookController::class, 'getCreatePage']);
Route::post('/create-book-post', [BookController::class, 'createBook']);

