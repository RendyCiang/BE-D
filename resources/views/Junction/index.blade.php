@extends('layout')
@section('title', 'Show Buku Pengarang')

@section('content')
   <div>
        <a href="/create-buku-pengarang">Create Buku Pengarang</a>
        <br>
        @foreach ($books as $item)
            {{ $item->nama }}
            
            @if($item->pengarang->count() > 0 )
                @foreach($item->pengarang as $pengarang)
                    <p> Nama : {{ $pengarang->nama }} Umur : {{ $pengarang->umur }}</p>
                @endforeach
            @endif
        @endforeach
   </div>
@endsection

