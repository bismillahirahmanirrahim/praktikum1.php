 //tugas1
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <style>
        div{
            width : 235px;
            height : 350px;
            float : left;
            margin-right : 20px;
            padding-right : 10px;
            padding-left : 10px;
            padding-top : 20px;
            text-align : left;
            border : 2px solid black;
            font-size : 23px;
        }
    </style>
</head>
<body>
<?php
    $dataProduk = array(
        //nama produk, merk, harga, status stok
        array("Samsung", "Galaxy S21", 19000000, true),
        array("Samsung", "Galaxy A71", 6999000, false),
        array("Apple", "iPhone 12 Pro Max", 20999000, true),
        array("Apple", "iPhone 12 Mini", 10999000, false),
        );
        for ($baris=0; $baris < count($dataProduk); $baris++) {
            echo "<div>";
            for ($kolom=0; $kolom < count($dataProduk[$baris])-1; $kolom++) {
                echo "<b>" .$dataProduk[$baris][$kolom] ."<b>"."<br>";
                echo "<br>";
            }
            if($dataProduk[$baris][3]==true){
                echo "Stock tersedia <br>"."<button>"."order"."</button>"."<br>"."<br>";
            }
            else{
                echo "Stok habis<br>";
            }
            echo "<br>";
            echo "</div>";
        }
?>
    
</body>
</html>

