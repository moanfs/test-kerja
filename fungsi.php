<?php
function hitungLuasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
$alas = 10;
$tinggi = 5;
$luas = hitungLuasSegitiga($alas, $tinggi);

echo "Luas segitiga adalah $luas";
