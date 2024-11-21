<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <title>Pertemuan-1</title>

    <style>
        .paragraf{
            color:grey;
            background-color: yellow;
        }
    </style>
</head>
<body>
    Hello World
    {{-- Heading --}}
    {{-- H1 - H6 --}}
    <h1>Hello World H1</h1>
    <h2>Hello World H2</h2>
    <h3>Hello World H3</h3>
    <h4>Hello World H4</h4>
    <h5>Hello World H5</h5>
    <h6>Hello World H6</h6>

    {{-- Paragraph --}}
    <p>Ini Paragraf 1</p>
    <p>Lorem ipsum dolor sit amet.</p>
    <br>
    <br>
    <br>
    <p>Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. <br> Odio facere quam, quasi soluta provident quibusdam blanditiis. Quae eos modi praesentium doloribus sint a animi, vel voluptate beatae. Rerum ullam at ab quis a impedit velit quia quam debitis facilis, itaque labore veniam deleniti quod placeat ipsa! Voluptatem quis consequuntur provident.</p>

    {{-- Navigasi --}}
    <a href="https://www.google.com/">Ini Redirect Google </a>

    {{-- <img src="https://icons.veryicon.com/png/o/miscellaneous/tmm/a1-31-40x40.png" alt="Ini Logo Hati"> --}}

    {{-- br = kasih enter --}}
    <p>Ini Kalimat 1, <br> Ini Kalimat ke 2</p>


    {{-- hr = kasih garis horizontal --}}
    <p>Tolong ini di underline / di garis bawah</p>
    <hr>

    {{-- Form = Formulir --}}
    <form action="">
        <input type="text">
        <button>Submit</button>
    </form>
    
    <br>
    <br>
    <br>
    
    {{-- Input = Mengambil inputan --}}
    <input type="text" placeholder="Masukkan Nama Anda">
    <br>
    <br>
    <br>
    <input type="email" placeholder="Masukkan Email Anda">
    <br>
    <br>
    <br>
    <input type="password" placeholder="Masukkan Password Anda">
    <br>
    <br>
    <br>
    <input type="number" placeholder="Masukkan Nomor">
    <br>
    <br>
    <br>
    <input type="date" >
    <br>
    <br>
    <br>
    <input type="time">
    <br>
    <br>
    <br>
    <input type="checkbox"> Check Saya 
    <br>
    <input type="checkbox"> Check saya yg 2
    <br>
    <br>
    <br>
    <input type="radio"> Male 
    <input type="radio"> Female 
    <br>
    <br>
    <br>
    <input type="file">
    <br>
    <br>
    <br>

    {{-- Button --}}
    <button type="submit">Button Submit</button>
    <button type="reset">Reset</button>
    <button disabled="disabled">Disabled Button</button>

    {{-- table --}}
    {{-- tr = table row  --}}
    {{-- th = table head --}}
    {{-- td = table data --}}
    <table>
        <tr>
            <th>Person</th>
            <th>Age</th>

        </tr>

        <tr>
            <td>Chris</td>
            <td>38</td>
        </tr>

        <tr>
            <td>Dennis</td>
            <td>45</td>
        </tr>
    </table>

    {{-- Div --}}
    <div>
        <h1>DIV</h1>
        <p>Halo Ini di dalam div</p>
    </div>

    {{-- Inline = Langsung di atribut HTMLnya--}}
    <p>Ini paragraf warna Hitam</p>
    <p style="color: blue; background-color:tan;">Ini paragraf warna Biru</p>

    {{-- Internal = Langsung bikin styling di bagian head --}}
    <p class="paragraf">Ini styling dari heading</p>

    {{-- External = Membuat styling di file yang berbeda --}}
    <p class="paragraf-eksternal">Aku mau ini warna Merah, dengan background warna hitam</p>


    {{-- Selector --}}
    {{-- Class Selector --}}
    <h1 class="heading-1">Toko Budi</h1>

    {{-- ID Selector --}}
    <h1 id="heading-2">Pemiliknya Budi</h1>

    {{-- Element Selector --}}
    <p>Ini Menggunakan Element Selector Agar Bewarna</p>
    <p class="warna">Ini pakai External CSS</p>

    {{-- Pseudo Class --}}
    <p class="test-pseudo">Halo Ini Warna Hitam, Biru ketika di arahkan kursornya</p>
    <input type="text" placeholder="Masukkan Nama Anda" class="nama">
</body>
</html>
