<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{   
    function getReviewPage(){
        $books_temp = Book::all();
        return view('reviews.reviewPage', compact('books_temp'));
    }

    function create(){
        $books = Book::all();
        return view('reviews.create', compact('books'));
    }

    function store(Request $request){
        $request->validate([
            'book_id' => 'required',
            'nama' => 'required|min:5',
            'rating' => 'required|min:1|max:5|numeric',
            'comment' => 'required|min:5'
        ],[
            'rating.required' => 'Required bang'
        ]);

        Review::create([
            'book_id' => $request->book_id,
            'nama' => $request->nama,
            'rating' => $request->rating, 
            'comment' => $request->comment
        ]);

        return redirect('/review');
    }

    function delete($id){
        $review = Review::findOrFail($id);
        $review::destroy($id);

        return redirect('/review');

    }
}
