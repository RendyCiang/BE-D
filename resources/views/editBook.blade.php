<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <form action="/update-book/{{ $book->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Doe" name="nama" value="{{ $book->nama}}">
            @error('nama')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Penerbit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="JK Rowling" name="penerbit" value="{{ $book->penerbit }}">
            @error('penerbit')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kota Terbit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jakarta" name="kota_terbit" value="{{ $book->kota_terbit}}">
            @error('kota_terbit')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tahun Terbit</label> 
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="2024" name="tahun_terbit" value="{{ $book->tahun_terbit }}">
            @error('tahun_terbit')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">ISBN</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="111-222-333" name="isbn" value="{{ $book->isbn }}">
            @error('isbn')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="5000" name="harga" value="{{ $book->harga }}">
            @error('harga')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Stok</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="2" name="stok" value="{{ $book->stok }}">
            @error('stok')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Photo</label>
            <input type="file" class="form-control" name="photo">
            <img src="{{ asset('storage/book_images/' . $book->photo) }}" alt="">
            @error('photo')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>