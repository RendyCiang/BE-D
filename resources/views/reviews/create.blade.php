@extends('layout')
@section('title', "Create Review")
@section('content')
   <div>
        <h1>
            Create Review
        </h1>

        <form action="/create/review" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul Buku</label>
                <select name="book_id" id="">
                    <option value="">Pilih Buku</option>
                    @foreach ($books as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama Reviewer</label>
                <input type="text" class="form-control" placeholder="John Doe" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div style="color: red">{{ $message }}</div>    
                @enderror
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" class="form-control"  placeholder="1 - 5" name="rating" value="{{ old('rating') }}">
                @error('rating')
                    <div style="color: red">{{ $message }}</div>    
                @enderror
            </div>
            <div class="form-group">
                <label for="comment">Review Pembaca</label>
                <textarea type="text" class="form-control"  placeholder="Buku Cocok Untuk Segala Umur" name="comment" value="{{ old('comment') }}">
                </textarea>
                @error('comment')
                    <div style="color: red">{{ $message }}</div>    
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
        </form>
   </div>
@endsection

