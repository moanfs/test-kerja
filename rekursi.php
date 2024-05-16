<?php
function rekursi($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return ($n * $n) + rekursi($n - 1);
    }
}
$n = 4;
$hasil = rekursi($n);

echo "F($n) = $hasil";
