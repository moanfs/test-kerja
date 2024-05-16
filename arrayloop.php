<?php
function arrayloop($arrayA, $arrayB)
{
    $hasil = [];
    for ($i = 0; $i < count($arrayA); $i++) {
        $ditemukan = false;

        for ($j = 0; $j < count($arrayB); $j++) {
            if ($arrayA[$i] == $arrayB[$j]) {
                $ditemukan = true;
                break;
            }
        }
        if (!$ditemukan) {
            $hasil[] = $arrayA[$i];
        }
    }

    return $hasil;
}
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [2, 4, 6, 8, 10];
$elemenTidakAda = arrayloop($arrayA, $arrayB);

echo "Elemen yang tidak ada di array B: ";
for ($i = 0; $i < count($elemenTidakAda); $i++) {
    echo $elemenTidakAda[$i] . " ";
}
