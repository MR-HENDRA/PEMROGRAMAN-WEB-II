<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HENDRA USMAN</title>
</head>

<body>
    <?php
    // Menentukan nilai jari-jari lingkaran
    $jari_jari_lingkaran = 7;

    // Menentukan nilai phi berdasarkan perbandingan
    if ($jari_jari_lingkaran > 10) { // PENGGUNAAN OPERATOR PEMBANDING
        $phi = 3.14;
    } else {
        $phi = 22 / 7;
    }

    // Menghitung luas lingkaran
    $luas_lingkaran = $phi * $jari_jari_lingkaran * $jari_jari_lingkaran;

    // Menampilkan hasil perhitungan
    echo "Jari - Jari Lingkaran: $jari_jari_lingkaran" . " cm" . "<br>";
    echo "Luas Lingkaran: $luas_lingkaran" . " cm" . "<br>";
    ?>

</body>
