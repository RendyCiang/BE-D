@extends('layout')
@section('title', "Home Page")
@section('content')
    <div style="justify-content:center; align-items:center;display:flex;flex-direction:column">
        <p>Home Page</p>
        <p>Toko Buku</p>
        <img src="{{ asset('Image/tokoBuku.jpg') }}" alt="">
    </div>
    <div>
        @section('foto', "https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-47722385/kemendikbud_republik_indonesia_buku_pelajaran_sd_-_kelas_1_tema_1_kemendikbud_-best_seller-_full01_4bd891b7.jpg")
        @section('title_card', "Buku Pelajaran")
        @section('description', "Buku Pelajaran Anak Kelas 5 SD")
        @include('LayoutManager.Card')
    </div>

    <div>
        <label for="">Email</label>
        <input type="text" placeholder="john@gmail.com">
        <br>
        <label for="">Password</label>
        <input type="password" placeholder="12345">
    </div>
@endsection

