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
    $nilai = 50;
    switch ($nilai) {
        case $nilai >= 90:
            $grade = "A";
            break;
        case $nilai >= 80:
            $grade = "B";
            break;
        case $nilai >= 70:
            $grade = "C";
            break;
        case $nilai >= 60:
            $grade = "D";
            break;
        case $nilai < 60:
            $grade = "E";
            break;
        default:
            $grade = "T";
    }
    echo "Nilai Anda Adalah : $grade";
    ?>
</body>

</html>