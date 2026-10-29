
<?php
function hitungGaji($golongan, $jumlahHari, $jamKerja) {
    if ($golongan == "A") {
        $gajiHarian = 100000;
    } elseif ($golongan == "B") {
        $gajiHarian = 150000;
    } elseif ($golongan == "C") {
        $gajiHarian = 200000;
    } else {
        echo "Golongan tidak valid!";
        return;
    }

    $totalGaji = 0;
    $totalBonus = 0;

    for ($hari = 1; $hari <= $jumlahHari; $hari++) {
        $gaji = $gajiHarian;

        if ($jamKerja > 8) {
            $bonus = 50000;
        } else {
            $bonus = 0;
        }

        $totalGaji += $gaji;
        $totalBonus += $bonus;

        echo "Hari ke-$hari: Gaji Rp" .
             number_format($gaji, 0, ',', '.') .
             " | Bonus Rp" .
             number_format($bonus, 0, ',', '.') . "<br>";
    }

    echo "<br>Total gaji: Rp" .
         number_format($totalGaji, 0, ',', '.');
    echo "<br>Total bonus: Rp" .
         number_format($totalBonus, 0, ',', '.');
    echo "<br>Total diterima: Rp" .
         number_format($totalGaji + $totalBonus, 0, ',', '.');
}

hitungGaji("B", 5, 9);
?>
