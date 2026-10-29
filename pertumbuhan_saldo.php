
<?php
function hitungTabungan($saldoAwal, $setoran, $jumlahBulan) {
    $saldo = $saldoAwal;

    echo "Saldo awal: Rp" .
         number_format($saldo, 0, ',', '.') . "<br><br>";

    for ($bulan = 1; $bulan <= $jumlahBulan; $bulan++) {
        $bonus = 0;

        if ($setoran >= 50000) {
            $bonus = 10000;
        } else {
            $bonus = 0;
        }

        $saldo += $setoran + $bonus;

        echo "Bulan ke-$bulan<br>";
        echo "Setoran: Rp" .
             number_format($setoran, 0, ',', '.') . "<br>";
        echo "Bonus: Rp" .
             number_format($bonus, 0, ',', '.') . "<br>";
        echo "Saldo akhir: Rp" .
             number_format($saldo, 0, ',', '.') . "<br><br>";
    }

    echo "<b>Total saldo akhir: Rp" .
         number_format($saldo, 0, ',', '.') . "</b>";
}

hitungTabungan(100000, 50000, 6);
?>
