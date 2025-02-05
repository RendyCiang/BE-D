<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Pengarang;
use Illuminate\Http\Request;

class Book_PengarangController extends Controller
{
    function showBookPengarang(){
        $books = Book::all();
        $pengarang = Pengarang::all();
        return view('Junction.index', compact('books', 'pengarang'));
    }
    
    function getCreate(){
        $books = Book::all();
        $pengarang = Pengarang::all();
        return view('Junction.create', compact('books', 'pengarang'));
    }

    function store(Request $request){
        $request->validate([
            'book_id' => 'required',
            'pengarang_id' => 'required',
            'pengarang_id.*' => 'exists:pengarangs,id'
        ]);

        $books = Book::find($request->book_id);

        $books->pengarang()->attach($request->pengarang_id);

        return redirect('/buku-pengarang');
    }
}