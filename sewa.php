<?php
function hitungSewa($jenis, $lama) {
    if ($jenis == "sedan") {
        $tarif = 300000;
    } elseif ($jenis == "suv") {
        $tarif = 500000;
    } else {
        return false;
    }

    $total = 0;

    for ($hari = 1; $hari <= $lama; $hari++) {
        $total += $tarif;
        echo "Hari ke-$hari: Rp" .
             number_format($tarif, 0, ',', '.') . "<br>";
    }

    if ($lama > 3) {
        $diskon = $total * 10 / 100;
    } else {
        $diskon = 0;
    }

    $totalBayar = $total - $diskon;

    echo "<br>Total sewa: Rp" .
         number_format($total, 0, ',', '.');
    echo "<br>Diskon: Rp" .
         number_format($diskon, 0, ',', '.');
    echo "<br>Total pembayaran: Rp" .
         number_format($totalBayar, 0, ',', '.');
}

hitungSewa("sedan", 4);
?>
