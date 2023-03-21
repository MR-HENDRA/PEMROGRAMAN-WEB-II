<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program PHP Statement dengan FORM</title>
</head>

<body>
    <div style="width: 50%; margin: auto; text-align: center; border: 1px solid #ccc; padding: 10px;">
        <h2>Program PHP untuk menampilkan Statement</h2>

        <form method="post" action="">
            Masukkan Nilai Anda : <input type="number" name="nilai" required><br><br>
            <input type="submit" name="submit" value="Submit"><br><br>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nilai = $_POST['nilai'];

            if ($nilai >= 90) {
                echo "<div style='background-color:#90EE90; padding: 10px; '> Nilai Anda adalah A</div>";
            } elseif ($nilai >= 80) {
                echo "<div style='background-color:#FFFF00; padding: 10px; '> Nilai Anda adalah B</div>";
            } elseif ($nilai >= 70) {
                echo "<div style='background-color:#FFA07A; padding: 10px; '> Nilai Anda adalah C</div>";
            } elseif ($nilai >= 60) {
                echo "<div style='background-color:#FFC0CB; padding: 10px; '> Nilai Anda adalah D</div>";
            } else {
                echo "<div style='background-color:#FFC0CB; padding: 10px; '> Nilai Anda adalah E</div>";
            }
        }
        ?>
    </div>
</body>

</html>