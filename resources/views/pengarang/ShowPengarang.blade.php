@extends('layout')
@section('title', 'Pengarang Page')

@section('content')
   <div>
        <a href="/pengarang-create">Create Pengarang</a>

        @foreach ($pengarang as $item)
        <p>Nama : {{ $item->nama }}</p>
        <p>Umur : {{ $item->umur }}</p>
            
        @endforeach
   </div>
@endsection

