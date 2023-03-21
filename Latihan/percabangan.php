<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nilai = 90;
    if ($nilai >= 90) {
        echo "Nilai: A";
    } elseif ($nilai >= 80) {
        echo "Nilai: B";
    } elseif ($nilai >= 70) {
        echo  "Nilai: C";
    } elseif ($nilai >= 60) {
        echo "Nilai: D";
    } elseif ($nilai < 60) {
        echo  "Nilai: E";
    }
    ?>
</body>

</html>