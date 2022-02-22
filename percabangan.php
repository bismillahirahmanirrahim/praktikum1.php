<?php
    $a = 85;

    if ($a > 90) {
        echo "A+";
    }
    elseif ($a > 80 && $a <= 90) {
        echo "A";
    }
    elseif ($a > 70 && $a <= 80) {
        echo "B+";
    }
    elseif ($a > 60 && $a <= 70) {
        echo "B";
    }
    elseif ($a > 50 && $a <= 60) {
        echo "C";
    }
    elseif ($a > 40 && $a <= 50) {
        echo "C+";
    }
    elseif ($a > 30 && $a <= 40) {
        echo "D";
    }
    elseif ($a <= 30) {
        echo "E";
    }
?>