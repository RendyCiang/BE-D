<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Create Pengarang</title>
</head>
<body>
    <form action="/pengarang" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Doe" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Umur</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Doe" name="umur" value="{{ old('umur') }}">
            @error('umur')
                <div style="color: red">{{ $message }}</div>    
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>