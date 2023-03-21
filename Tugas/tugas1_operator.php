<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HENDRA USMAN (D0221079)</title>
</head>

<body>
    <?php
    echo "<h4>===== PROGRAM MENGHITUNG LUAS BANGUN DATAR =====</h4>";
    function hitungLuasSegitiga($alas, $tinggi)
    {
        $luas = 0.5 * $alas * $tinggi; // penggunaan operator aritmetik
        return $luas;
    }

    function hitungLuasLingkaran($jari_jari)
    {
        if ($jari_jari > 10) { // penggunaan operator perbandingan >
            $phi = 3.14;
        } else {
            $phi = 22 / 7;
        }
        $luas = $phi * $jari_jari * $jari_jari;
        return $luas;
    }

    function hitungLuasPersegiPanjang($panjang, $lebar)
    {
        if ($panjang > 0 && $lebar > 0) { // penggunaan operator logika &&
            $luas = $panjang * $lebar;
            return $luas;
        } else {
            return "Panjang dan lebar persegi panjang tidak valid!";
        }
    }

    // Menggunakan function untuk menghitung luas segitiga
    $alas_segitiga = 5;
    $tinggi_segitiga = 7;
    $luas_segitiga = hitungLuasSegitiga($alas_segitiga, $tinggi_segitiga);

    // Menampilkan hasil perhitungan
    echo "PROGRAM SEGITIGA (Aritmetik) <br>";
    echo "Alas Segitiga: $alas_segitiga" . " cm" . "<br>";
    echo "Tinggi Segitiga: $tinggi_segitiga" . " cm" . "<br>";
    echo "Luas segitiga: $luas_segitiga" . " cm²" . "<br>";
    echo "<br>";

    // Menggunakan function untuk menghitung luas lingkaran
    $jari_jari_lingkaran = 7;
    $luas_lingkaran = hitungLuasLingkaran($jari_jari_lingkaran);

    // Menampilkan hasil perhitungan
    echo "PROGRAM LINGKARAN  (Perbandingan)<br>";
    echo "Jari - Jari Lingkaran: $jari_jari_lingkaran" . " cm" . "<br>";
    echo "Luas Lingkaran: $luas_lingkaran" . " cm²" . "<br>";
    echo "<br>";

    // Menggunakan function untuk menghitung luas persegi panjang
    $panjang_persegi_panjang = 10;
    $lebar_persegi_panjang = 5;
    $luas_persegi_panjang = hitungLuasPersegiPanjang($panjang_persegi_panjang, $lebar_persegi_panjang);

    // Menampilkan hasil perhitungan
    echo "PROGRAM PERSEGI PANJANG  (Logika)<br>";
    echo "Panjang Persegi Panjang: $panjang_persegi_panjang" . " cm" . "<br>";
    echo "Lebar Persegi Panjang: $lebar_persegi_panjang" . " cm" . "<br>";
    echo "Luas Persegi Panjang: $luas_persegi_panjang" . " cm²" . "<br>";
    echo "<br>";
    ?>

</body>

</html>