<?php
    //Array numerik

    //cara 1
    $nama_hewan = array("kelinci", "kucing", "anjing");
    //                      0          1         2

    //cara 2
    $nama_bunga = ["kamboja", "mawar", "melati"];
    //                 0         1         2

    echo $nama_hewan[2]."<br>";
    echo $nama_bunga[1]."<br>";

    foreach ($nama_bunga as $value) {
        echo $value.", ";
    }
    echo "<br>";

    //array asosiatif
    $biodata = [
        "nama" => "rafi'firdaus",
        "umur" => 16,
        "alamat" => "trenggalek"
    ];

    echo $biodata["umur"]."<br>";
    foreach ($biodata as $key => $value) {
        echo $key.": ".$value.",";
    }
    echo "<br>";

    //array multimedia
    $data = [
        "nama" => "Rafi'firdaus",
        "umur" => 16,
        "alamat" => "trenggalek",
        "hobi" => ["batminton", "Menggambar", "otomotif", "pramuka"],
        "sosmed" => ["fb" => "facebook", "ig" => "Instagram", "wa" => "whatsapp", "twit" => "twitter"]
    ];

    echo $data["alamat"]."<br>";
    echo $data["hobi"][1]."<br>";
    echo $data["sosmed"]["ig"]."<br>";

    foreach ($data as $key => $value){
        if ($key == "hobi") {
            echo $key.": ";
            foreach ($value as $element){
                echo $element.", ";
            }
            echo "<br>";
        }
        else if ($key == "sosmed"){
            echo $key.": <br>";
            foreach ($value as $keys => $element) {
                echo $keys.": ".$element."<br>";
            }
            echo "<br>";
        }
        else{
            echo $key.": ".$value."<br>";
        }
    }

    //mm2
    $employee = [
        "nama" => "Rafi'firdaus",
        "umur" => 16,
        "alamat" => "trenggalek",
        "hobi" => ["batminton", "Menggambar", "otomotif", "pramuka"],
        "sosmed" => ["fb" => "facebook", "ig" => "Instagram", "wa" => "whatsapp", "twit" => "twitter"]
    ];
    echo $employee["nama"];
    echo "<br>";
    echo $employee["umur"];
    echo "<br>";
    echo $employee["alamat"];
    echo "<br>";
    
    foreach ($employee ["hobi"] as $array){
        echo $array;
        echo "<br>";
    }
    foreach ($employee ["sosmed"] as $key => $value){
    echo $key.": ".$value;
    echo "<br>";
    }
 

    //latihan 2
    $siswa = array(
        ["nama" => "Ahmad Habibi", "kelas" => "X", "jurusan" => 'RPL'],
        ["nama" => "Zainul Abidin", "kelas" => "XII", "jurusan" => 'RPL'],
        ["nama" => "Firdaus", "kelas" => "XI", "jurusan" => "TKJ"],
        ["nama" => "Achmad ilham", "kelas" => "X", "jurusan" => "TKJ"],
        );

        foreach ($siswa as $array) {
            foreach ($array as $key => $value) {
                echo $key.": ".$value;
            echo"<br>"; 
            }
        }

        foreach ($siswa as $element) {
            echo "<table border='1' style='border-colapse:collapse;width:200'>";
            echo "<tr>";
            echo "<td>".$element["nama"]."<br>".$element["kelas"]."-".$element["jurusan"]."</td>";
            echo "</table>";
        }