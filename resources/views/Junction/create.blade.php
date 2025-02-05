<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Create Buku pengarang</title>
</head>
<body>
    <form action="/create" method="POST">
        @csrf
        <div class="dropdown">
            <label for="book_id" class="form-label">Select Book</label>
            <select name="book_id" id="book_id" class="form-select">
                <option value="" selected disabled>Select a Book</option>  
                @foreach ($books as $item)
                <option value="{{ $item->id}}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="pengarang_id" class="form-label">Select Pengarang</label>
            <div id="pengarang_id">
                @foreach($pengarang as $item)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pengarang_id[]" value="{{ $item->id }}" id="pengarang_{{ $item->id }}">
                        <label for="form-check-input" for="pengarang_{{ $item->id }}">
                            {{ $item->nama }}
                        </label>
                    </div>
                @endforeach 
            </div>
        </div>

        <button type="submit">Submit</button>
    </form>
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>