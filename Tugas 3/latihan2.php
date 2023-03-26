<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Function</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e8e8e8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #333;
            text-align: center;
            text-shadow: 1px 1px 1px #ccc;
        }

        p {
            font-size: 1.2rem;
            color: #777;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    function getIpAddress($host_name)
    {
        $ip_address = gethostbyname($host_name);
        return $ip_address;
    }
    function name($nama, $kalimat)
    {
        echo "<h1>Selamat datang di $nama, ini contoh $kalimat</h1>";
    }
    name("Unsulbar", "Function");
    $host_name = "unsulbar.ac.id";
    $ip_address = getIpAddress($host_name);
    // echo "Menampilkan alamat IP dari $host_name : " . $ip_address;
    echo "<p>Menampilkan alamat IP dari $host_name : </p>" . $ip_address;
    ?>
</body>
</html>