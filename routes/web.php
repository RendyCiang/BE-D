<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/about', function () {
    return view('aboutPage');
});
Route::get('/', [BookController::class, 'getHomePage'])->name('landingpage');
Route::get('/create-book', [BookController::class, 'getCreatePage']);
Route::post('/create-book-post', [BookController::class, 'createBook']);


// Edit Book
Route::get('/edit-book/{id}', [BookController::class, 'getEditBook']);
Route::put('/update-book/{id}', [BookController::class, 'updateBook']);
Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('delete');