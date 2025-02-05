<?php

use App\Http\Controllers\Book_PengarangController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\ReviewController;
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

// Review
Route::get('/create/review', [ReviewController::class, 'create']);
Route::post('/create/review', [ReviewController::class, 'store']);
Route::get('/review', [ReviewController::class, 'getReviewPage']);
Route::post('/delete/{id}', [ReviewController::class, 'delete']);

// Pengarang 
Route::get('/pengarang', [PengarangController::class, 'getPengarangPage']);
Route::get('/pengarang-create', [PengarangController::class, 'create']);
Route::post('/pengarang', [PengarangController::class, 'store']);
Route::post('/pengarang/{id}', [PengarangController::class, 'delete']);

// Buku Pengarang 
Route::get('/buku-pengarang', [Book_PengarangController::class, 'showBookPengarang']);
Route::get('/create-buku-pengarang', [Book_PengarangController::class, 'getCreate']);
Route::post('/create', [Book_PengarangController::class, 'store']);


