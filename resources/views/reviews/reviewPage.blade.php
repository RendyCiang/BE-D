@extends('layout')
@section('title', "Review Page")
@section('content')
   <div>
        <h1>
            Review Page
        </h1>
        @foreach ($books_temp as $item)
            <h1>{{ $item->nama }}</h1>

            @if ($item->reviews->isEmpty())
                <p>Buku ini belum ada yang review, boleh banget untuk di review</p>
            @endif 

            @foreach ($item->reviews as $a)
                <p>ID Reviewer : <strong>{{ $a->id }} </strong></p>
                <p>Nama Reviewer : <strong>{{ $a->nama }} </strong></p>
                <p>Rating Reviewer : <strong>{{ $a->rating }} </strong></p>
                <p>Comment Reviewer : <strong>{{ $a->comment }} </strong></p>

                <form action="/delete/{{ $a->id }}" method="POST">
                    @csrf
                    <button type="submit">DELETE BANG</button>
                </form>
            @endforeach


        @endforeach
   </div>
@endsection

