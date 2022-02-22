<?php
    function volumebalok ($p, $l, $t){
        $volume = 2 *(($p * $l)+($p * $t)+($l * $t));
        return $volume;
    }
     function hitung ($p = 7, $l = 10, $t = 4){
         echo " P = $p <br>";
         echo " L = $l <br>";
         echo " T = $t <br>";
         echo "Rumus Volume : ((p*l)+(p*t)+(l*t)) <br>";
         echo "HASIL = ".volumebalok(7, 10, 4);
     }
     echo "Volume Balok dari : <br> ";
     hitung ();