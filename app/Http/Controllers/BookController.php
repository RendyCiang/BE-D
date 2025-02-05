<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Create Book
    function getCreatePage(){
        return view('createBook');
    }

    // Home Page
    function getHomePage(){
        $ambil_data = Book::all();
        return view('homePage', compact('ambil_data'));
    }

    // Edit Book 
    function getEditBook($id){
        $book = Book::findOrFail($id);
        return view('editBook', compact('book'));
    }

    function createBook(Request $request){
        $request->validate([
            'nama' => 'required|min:5',
            'penerbit' => 'required',
            'kota_terbit' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'photo' => 'required'
        ], [
            'nama.required' => "Nama Required",
            'nama.min' =>"Nama Minimal 5 Bang",
    
            'penerbit.required' => "penerbit Required",
            'kota_terbit.required' => "kota_terbit Required",
            'tahun_terbit.required' => "Tahun terbit required",
            'isbn.required' => "ISBN Required",
            'harga.required' => "Harga Required",
            'stok.required' => "Stok Required",
            'photo.required' => "Photo Required"
        ]);

        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now . '_' . $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('book_images', $filename, 'public');

        Book::create([
            'nama' => $request->nama,
            'penerbit' => $request->penerbit,
            'kota_terbit' => $request->kota_terbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'photo' => $filename
        ]);

        return redirect(route('landingpage'))->with('success', "CREATE_BUKU BERHASIL BANG");
    }

    function updateBook(Request $request, $id){
        $request->validate([
            'nama' => 'required|min:5',
            'penerbit' => 'required',
            'kota_terbit' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'photo' => 'image'
        ], [
            'nama.required' => "Nama Required",
            'nama.min' =>"Nama Minimal 5 Bang",
            'penerbit.required' => "penerbit Required",
            'kota_terbit.required' => "kota_terbit Required",
            'tahun_terbit.required' => "Tahun terbit required",
            'isbn.required' => "ISBN Required",
            'harga.required' => "Harga Required",
            'stok.required' => "Stok Required",
        ]);

        $book = Book::findOrFail($id);
        if($request->hasFile('photo')){
            $now = now()->format('Y-m-d_H.i.s');
            $filename = $now . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('book_images', $filename, 'public');
            $book->photo = $filename;
        }

        $book->update([
            'nama' => $request->nama,
            'penerbit' => $request->penerbit,
            'kota_terbit' => $request->kota_terbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'photo' => $book->photo
        ]);

        return redirect('/')->with('success', 'Data Berhasil Di Update');
    }

    function deleteBook($id){
        $book = Book::findOrFail($id);
        $book::destroy($id);

        return redirect(route('delete'))->with('success', 'Data Berhasil Di Hapus');
    }
}
