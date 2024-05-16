<?php
function tagihanListrik($BulanLalu, $BulanSekarang)
{
    $penggunaan = $BulanSekarang - $BulanLalu;

    $biayaPenggunaan = 0;
    if ($penggunaan <= 50) {
        $biayaPenggunaan = $penggunaan * 1500;
    } elseif ($penggunaan <= 100) {
        $biayaPenggunaan = 50 * 1500 + ($penggunaan - 50) * 1350;
    } else {
        $biayaPenggunaan = 50 * 1500 + 50 * 1350 + ($penggunaan - 100) * 1200;
    }

    $abonemen = 50000;
    $totalTagihan = $biayaPenggunaan + $abonemen;

    return $totalTagihan;
}

$BulanLalu = 1000;
$BulanSekarang = 1125;
$totalTagihan = tagihanListrik($BulanLalu, $BulanSekarang);

echo "Total tagihan listrik adalah Rp " . $totalTagihan;
