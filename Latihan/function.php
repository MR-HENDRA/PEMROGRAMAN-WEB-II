<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <?php
    function info_tanggal()
    {
        $hari = array("Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $tgl = getdate();

        echo $hari[$tgl['wday']] . ", $tgl[mday]-" . $bulan[$tgl['mon']] . "-$tgl[year]";
    }
    function pangkat($x, $n)
    {
        return pow($x, $n);
    }
    ?>

    Sekarang : <?php
                info_tanggal();
                ?>

    <br>5<sup>3</sup> = <?php echo pangkat(5, 3); ?>

</body>

</html>