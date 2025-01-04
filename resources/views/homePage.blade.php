@extends('layout')
@section('title', "Home Page")
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div style="justify-content:center; align-items:center;display:flex;flex-direction:column">
        <p>Home Page</p>
        <p>Toko Buku</p>
        <img src="{{ asset('Image/tokoBuku.jpg') }}" alt="">
    </div>

    
    <div>
        @foreach ( $ambil_data as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/book_images/' . $item->photo) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama : {{ $item->nama }}</h5>
                    <p class="card-text">Author : {{ $item->author }}</p>
                    <p class="card-text"> Penerbit : {{ $item->penerbit }}</p>
                    <p class="card-text">Kota : {{ $item->kota_terbit }}</p>
                    <p class="card-text">Tahun :{{ $item->tahun_terbit }}</p>
                    <p class="card-text">ISBN : {{ $item->isbn }}</p>
                    <p class="card-text">Harga : {{ $item->harga }}</p>
                    <p class="card-text">Stok : {{ $item->stok}}</p>
                    <p class="card-text">Photo : {{ $item->photo}}</p>
                    
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-secondary">
                        <a href="/edit-book/{{ $item->id }}">
                            Edit Book
                        </a>
                    </button>
                    <form action="/delete-book/{{ $item->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" style="margin-top: 5px">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

