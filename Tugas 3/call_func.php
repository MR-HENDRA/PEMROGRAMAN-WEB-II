<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Penggunaan Library Funtion dalam PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <h1>Contoh Penggunaan Library Funtion dalam PHP</h1>
    <table>
        <thead>
            <tr>
                <th>Function</th>
                <th>Contoh Penggunaan</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>factorial()</td>
                <td>factorial(5)</td>
                <td>
                    <?php require_once('library_function.php');
                    echo factorial(5); ?>
                </td>
            </tr>
            <tr>
                <td>rot13()</td>
                <td>rot13('Halo Dunia')</td>
                <td>
                    <?php require_once('library_function.php');
                    echo rot13('Halo Dunia!'); ?>
                </td>
            </tr>
            <tr>
                <td>validate_email()</td>
                <td>validate_email('contoh@email.com')</td>
                <td>
                    <?php require_once('library_function.php');
                    // if (validate_email('contoh@email.com')) {
                    if (validate_email(null)) {
                        echo 'Email valid';
                    } else {
                        echo 'Email tidak valid';
                    } ?>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>