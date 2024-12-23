<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function getCreatePage(){
        return view('createBook');
    }

    function getHomePage(){
        $ambil_data = Book::all();
        return view('homePage', compact('ambil_data'));
    }

    function createBook(Request $request){
        $request->validate([
            'nama' => 'required|min:5',
            'author' => 'required',
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
            'author.required' => "Author Required",
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
            'author' => $request->author,
            'penerbit' => $request->penerbit,
            'kota_terbit' => $request->kota_terbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'photo' => $filename
        ]);

        return redirect('/')->with('success', "CREATE_BUKU BERHASIL BANG");

    }
}
