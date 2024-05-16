<?php
function max2($a, $b)
{
    if ($a > $b) return $a;
    return $b;
}

function max3($a, $b, $c)
{
    $maxAB = max2($a, $b);
    $maxABC = max2($maxAB, $c);
    return $maxABC;
}

$a = 5;
$b = 8;
$c = 3;
$nilaiTertinggi = max3($a, $b, $c);

echo "Nilai tertinggi adalah $nilaiTertinggi";
