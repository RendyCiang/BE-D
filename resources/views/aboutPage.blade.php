@extends('layout')
@section('title', 'About Page')

@section('content')
    <div style="justify-content:center; align-items:center;display:flex;flex-direction:column">
        <h1>About Page</h1>
        <p>Ini halaman tentang kami </p>
    </div>

    <div style="max-width: 50%">
        @section('foto-1', "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOFPrksAh1s3pZzAwigDEFMF7oMA_L1-ifFw&s")
        @section('foto-2', "https://cdn.gramedia.com/uploads/items/9786020305639_Kamus-Inggris.jpg")
        @section('foto-3', "https://cdn.rri.co.id/berita/Samarinda/o/1725331553391-1701301154192/mlfml0gd51e75f8.jpeg")
        @include('LayoutManager.Carousel')
    </div>

    <div>
        @section('button-1', 'Visi')
        @section('desc-1', "Ini tentang Visi Lho")
        @section('button-2', "Misi")
        @section('desc-2', "Ini Tentang Misi Lho")
        @section('button-3', "Tentang Kami")
        @section('desc-3', "Ini Tentang Kami Lho")
        @include('LayoutManager.Accordion')
    </div>
@endsection

