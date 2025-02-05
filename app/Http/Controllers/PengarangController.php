<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    function getPengarangPage(){
        $pengarang = Pengarang::all();
        return view('pengarang.ShowPengarang', compact('pengarang'));
    }

    function create(){
        return view('pengarang.CreatePengarang');
    }

    function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',

        ]);

        Pengarang::create([
            'nama' => $request->nama,
            'umur' => $request->umur
        ]);

        return redirect('/pengarang');
    }

    function delete($id){
        $pengarang = Pengarang::findOrFail($id);
        $pengarang::destroy($id);

        return redirect('/pengarang');

    }
}
