<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Function</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            color: #333;
        }
    </style>
</head>

<body>
    <h1>

        <?php
        function indonesia()
        {
            echo "Selamat datang di webku<br>";
        }
        function inggris()
        {
            echo "Welcome to my web<br>";
        }
        function jerman()
        {
            echo "Wilkommen auf meiner web<br>";
        }
        function italia()
        {
            echo "Benvenuti nel Mio Web<br>";
        }
        $bahasa = "jerman";
        $bahasa();
        $bahasa = "indonesia";
        $bahasa();
        ?>
    </h1>
</body>

</html>