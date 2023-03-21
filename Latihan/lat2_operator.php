<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HENDRA USMAN</title>
</head>

<body>
    <h1>Operator String</h1>
    <?php
    $teks1 = "Penggunaan ";
    $teks2 = "Operator";
    echo $teks1 . $teks2; //Penggabungan dua buah String antara variabel teks1 dan teks2
    echo "<br>";

    $teks1 = "Materi hari ini ";
    $teks2 = "Penggunaan Operator";
    $teks1 .= $teks2; //Memasukkan nilai variabel teks2 kedalam variabel teks1
    echo $teks1;
    ?>
</body>

</html>