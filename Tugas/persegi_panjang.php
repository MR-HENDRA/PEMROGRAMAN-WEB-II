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
    // Menentukan nilai panjang dan lebar persegi panjang
    $panjang_persegi_panjang = 10;
    $lebar_persegi_panjang = 5;

    // Menghitung luas persegi panjang
    if ($panjang_persegi_panjang > 0 && $lebar_persegi_panjang > 0) { //PENGGUNAAN OPERATOR LOGIKA &&
        $luas_persegi_panjang = $panjang_persegi_panjang * $lebar_persegi_panjang;
        echo "Panjang Persegi Panjang: $panjang_persegi_panjang" . " cm" . "<br>";
        echo "Lebar Persegi Panjang: $lebar_persegi_panjang" . " cm" . "<br>";
        echo "Luas Persegi Panjang: $luas_persegi_panjang" . " cm" . "<br>";
    } else {
        echo "Panjang dan lebar persegi panjang tidak valid!";
    }
    ?>

</body>

</html>