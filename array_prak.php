<?php
//array multimedia
    $data = [
        "nama" => "Rafi'firdaus",
        "umur" => 16,
        "alamat" => "trenggalek",
        "hobi" => ["batminton", "Menggambar", "otomotif", "pramuka"],
        "sosmed" => ["fb" => "facebook", "ig" => "Instagram", "wa" => "whatsapp", "twit" => "twitter"]
    ];

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

    //latihan 2
    $siswa = array(
        ["nama" => "Ahmad Habibi", "kelas" => "X", "jurusan" => 'RPL'],
        ["nama" => "Zainul Abidin", "kelas" => "XII", "jurusan" => 'RPL'],
        ["nama" => "Firdaus", "kelas" => "XI", "jurusan" => "TKJ"],
        ["nama" => "Achmad ilham", "kelas" => "X", "jurusan" => "TKJ"],
        );

        foreach ($siswa as $element) {
            echo "<table border='1' style='border-colapse:collapse;width:200'>";
            echo "<tr>";
            echo "<td>".$element["nama"]."<br>".$element["kelas"]."-".$element["jurusan"]."</td>";
            echo "</table>";
        }

