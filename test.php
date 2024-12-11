<?php
    echo "Hello World <br>";
    echo "Hello World Ke-2 <br>";

    // String 
    $nama = "Davin <br>";
    echo "nama = " . $nama;

    // Concat = Ngegabungin 
    $concat = "ini " . "kayak kepisah" . " tapi engga kepisah di browser <br>";
    echo $concat;

    // Numerical / Integer
    $umur = 18; 
    echo "Umur Davin = " . $umur . "<br>" ;

    echo "Petik SATU <br>";
    $string1 = 'Nama saya adalah $nama, umur saya $umur <br>';
    echo $string1;

    echo "<br> <br>";
    echo "Petik DUA <br>";
    $string2 = "Nama saya adalah $nama, umur saya $umur <br>";
    echo $string2;
    
    // Boolean 
    $isHappy = true;
    echo "isHappy = " . $isHappy . "<br>";

    echo "<br> <br>";
    echo "Indexed Array <br>";
    // Array (Indexed Array) -> Panggil By Index
    $identitasMhs = array("Budi", 18, "BDG", "Sate");
    // echo "Nama = " . $identitasMhs[0] . "<br>";
    // echo "Umur = " . $identitasMhs[1] . "<br>";
    // echo "Kampus = " . $identitasMhs[2] . "<br>";
    // echo "Favorit = " . $identitasMhs[3] . "<br>";
    foreach($identitasMhs as $i){
        echo $i . "<br>";
    }

    echo "<br> <br>";
    echo "Associative Array <br>";
    // Associative Array -> Panggil By Key / String
    $Mhs = array(
        "Nama" => "Tono",
        "Umur" => 20,
        "Kampus" => "MLG",
        "Favorit" => "Telur Ceplok"
    );

    // echo "Nama = ". $Mhs["Nama"] . "<br>";
    // echo "Umur = ". $Mhs["Umur"] . "<br>";
    // echo "Kampus = ". $Mhs["Kampus"] . "<br>";
    // echo "Favorit = ". $Mhs["Favorit"] . "<br>";

    $key = array_keys($Mhs);
    for($i = 0; $i < count($key); $i++){
        $temp = $key[$i];
        echo $temp . " = " . $Mhs[$temp] . "<br>";
    }



    echo "<br> <br>";
    echo "Multidimentional Array <br>";
    // Multidimensional Array 
    $Mhswa = array(
        array(
            "Nama" => "Joko", 
            "Hobi" => "Berenang",
            "Makan" => "Ayam",
            "Minum" => "Air",
            "Cita" => "Polisi"
        ),
        array(
            "Nama" => "Robert", 
            "Hobi" => "Tidur",
            "Makan" => "Sapi",
            "Minum" => "Cola",
            "Cita" => "Software Eng"
        ),
        array(
            "Nama" => "Pororo", 
            "Hobi" => "Main",
            "Makan" => "Penguin",
            "Minum" => "Air Dingin",
            "Cita" => "WebDev"
        )
    );
    // echo $Mhswa[1]["Nama"] . "<br>";
    // echo $Mhswa[0]["Nama"]  . "<br>";
    // echo $Mhswa[2]["Nama"]  . "<br>";

    for($i = 0 ; $i < count($Mhswa); $i++){
        echo "Nama " . "=" . $Mhswa[$i]["Nama"] . "<br>";
        echo "Hobi " . "=" . $Mhswa[$i]["Hobi"] . "<br>";
        echo "Makan " . "=" . $Mhswa[$i]["Makan"] . "<br>";
        echo "Minum " . "=" . $Mhswa[$i]["Minum"] . "<br>";
        echo "Cita " . "=" . $Mhswa[$i]["Cita"] . "<br>";

        echo "<br> <br>";
    }

    echo "<br> <br>";

    echo "Explode";

    $huruf = "A, B, C, D, E, F, G";
    $explode = explode("," , $huruf);
    echo $explode . "<br>";
    echo $huruf . "<br>";
    foreach($explode as $i){
        echo $i . "<br>";
    }

    $tanggal = "2024-12-11";
    $tanggalExplode = explode("-", $tanggal);
    $tahun = $tanggalExplode[0];

    echo "Tahun : ". $tahun . "<br>";
    foreach($tanggalExplode as $i){
        echo $i . "<br>";
    }


?>