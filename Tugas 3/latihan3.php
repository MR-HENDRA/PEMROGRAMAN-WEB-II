<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Fungsi</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            padding-top: 50px;
        }

        output {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            font-size: 1.2rem;
            color: #333;
        }

        output span {
            font-weight: bold;
            color: #f44336;
        }
    </style>
</head>

<body>

    <?php
    function pangkat($x, $n)
    {
        return pow($x, $n);
    }
    ?>

    <div class="container">
        <output>
            <span>Hasil Perhitungan Pangkat</span>
            <br><br>
            2<sup>4</sup> = <?php echo pangkat(2, 4) ?><br>
            4<sup>4</sup> = <?php echo pangkat(4, 4) ?><br>
            6<sup>4</sup> = <?php echo pangkat(6, 4) ?><br>
            8<sup>4</sup> = <?php echo pangkat(8, 4) ?><br>
            10<sup>4</sup> = <?php echo pangkat(10, 4) ?><br>
        </output>
    </div>

</body>

</html>