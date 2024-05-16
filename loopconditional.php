<?php
function random($jumlah)
{
    $numbers = [];

    for ($i = 0; $i < $jumlah; $i++) {
        $number = rand(1, 100);
        $numbers[] = $number;
        if ($i == 0) {
            echo "Angka: $number - PERTAMA\n";
        } else {
            $previousNumber = $numbers[$i - 1];
            if ($number > $previousNumber) {
                echo "Angka: $number - BESAR\n";
            } elseif ($number < $previousNumber) {
                echo "Angka: $number - KECIL\n";
            } else {
                echo "Angka: $number - SAMA\n";
            }
        }
    }
}
random(20);
