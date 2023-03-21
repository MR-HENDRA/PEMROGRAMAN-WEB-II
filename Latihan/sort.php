<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAT 1 | HENDRA USMAN</title>
</head>

<body>
    <?php
    $nilai = array(
        "Ani" => 80, "Otim" => 90, "Sri" => 75, "Budi" => 85
    );
    echo "<b>Before</b>";
    echo "<pre>";
    print_r($nilai);
    echo "</pre>";

    sort($nilai);
    // reset($nilai);
    echo "<b>After sort()</b>";
    echo "<pre>";
    print_r($nilai);

    echo "</pre>";
    rsort($nilai);
    // reset($nilai);
    echo "<b>After rsort()</b>";
    echo "<pre>";
    print_r($nilai);
    echo "</pre>";
    ?>
</body>

</html>