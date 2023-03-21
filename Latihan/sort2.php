<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAT 2 | HENDRA USMAN</title>
</head>

<body>
    <?php
    $arrNilai = array(
        "Adi" => 80, "Aco" => 90, "Agus" => 75, "Arman" => 85
    );
    echo "<b>Array sebelum pengurutan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";


    asort($arrNilai);
    // reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan asort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    arsort($arrNilai);
    // reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan arsort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    ?>
</body>

</html>