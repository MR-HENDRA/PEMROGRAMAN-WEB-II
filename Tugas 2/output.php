<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Peserta</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Leckerli+One&family=Lilita+One&family=Quicksand:wght@400;700&display=swap');

    body {
      font-family: 'Quicksand', sans-serif;
      margin: 0.5%;
      padding: auto;
      background-color: #00acfc;
      scroll-behavior: smooth;
    }

    div {
      width: 50%;
      margin: 30px auto auto auto;
      padding: 30px;
      border: 1.5px black;
      border-radius: 10px;
      background-color: rgb(255, 255, 255);
      font-size: 15px;
    }

    h2 {
      text-align: center;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?php

  if (isset($_POST['submit'])) {
    // Menangkap nilai dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tgl_lahir = $_POST['date'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = "";
    if (isset($_POST['hobi1'])) $hobi .= "Berenang, ";
    if (isset($_POST['hobi2'])) $hobi .= "Membaca, ";
    if (isset($_POST['hobi3'])) $hobi .= "Ngoding, ";
    if (isset($_POST['hobi4'])) $hobi .= "lainnya";
    $pendidikan = $_POST['pendidikan'];
    $alamat = $_POST['alamat'];
  }

  ?>

  <!-- // Menampilkan hasil inputan -->
  <div>
    <h2>Data Peserta</h2>
    <table>
      <tr>
        <td>Nama</td>
        <td><?php echo ": " . $nama; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo ": " . $email; ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo ": " . $tgl_lahir; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo ": " . $jenis_kelamin; ?></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td><?php echo ": " . $hobi?></td>
      </tr>
      <tr>
        <td>Pendidikan Terakhir</td>
        <td><?php echo ": " . $pendidikan ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo ": " . $alamat ?></td>
      </tr>
    </table>
  </div>
</body>

</html>