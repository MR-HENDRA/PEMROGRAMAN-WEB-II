<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Form Insert</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Leckerli+One&family=Lilita+One&family=Quicksand:wght@400;700&display=swap');

    body {
      font-family: 'Quicksand', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      scroll-behavior: smooth;
    }

    #footer {
      background-color: #0002A1;
      padding: 15px;
    }

    #div-utama {
      box-shadow: 1px 7px 7px 7px #ECF2FF;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <!-- Awal container -->
  <div class="container mt-5 mb-3">
    <!-- Awal row -->
    <div class="row">
      <!-- Awal col -->
      <div class="col-md-6 mx-auto">
        <!-- Awal card -->
        <div class="card" id="div-utama">
          <div class="card-header text-light" style="background-color: #0002A1;">
            <h5 style="font-weight:bold; text-align:center">FORM INPUT BARANG</h5>
          </div>
          <div class="card-body">
            <!-- Awal form -->
            <form action="insert.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="tkode" class="form-control" placeholder="Masukkan Kode Barang" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama Barang" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Asal Barang</label>
                <select class="form-select" name="tasal" required>
                  <!-- <select name="pendidikan" id="pendidikan" required> -->
                  <option value="">-- pilih --</option>
                  <option value="Pembelian">Pembelian</option>
                  <option value="Hibah">Hibah</option>
                  <option value="Bantuan">Bantuan</option>
                  <option value="Sumbangan">Sumbangan</option>
                </select>
              </div>

              <div class="row">

                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" name="tjumlah" class="form-control" placeholder="Masukkan Jumlah Barang" required>
                  </div>
                </div>

                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Satuan</label>
                    <select class="form-select" name="tsatuan" required>
                      <!-- <option>-- pilih --</option> -->
                      <option value="">-- pilih --</option>
                      <option value="Unit">Unit</option>
                      <option value="Kotak">Kotak</option>
                      <option value="Pcs">Pcs</option>
                      <option value="Pak">Pak</option>
                    </select>
                  </div>
                </div>

                <div class="col">
                  <div class="mb-3">
                    <label class="form-label">Tanggal Diterima</label>
                    <input type="date" name="ttanggal_diterima" class="form-control" required>
                  </div>
                </div>

                <div class="text-center">
                  <hr>
                  <button class="btn text-light" style="background-color: #0002A1;; font-weight:bold;" name="bsimpan" type="submit">Save</button>
                  <a href=" index.php" class="btn text-light" style="background-color: #F32424; font-weight:bold;">Cancel</a>
                </div>
              </div>

            </form>

            <!-- Akhir form -->

          </div>
          <div id="footer" class="card-footer">
            <div>

            </div>
          </div>
        </div>

        <!-- Akhir card -->
      </div>
      <!-- Akhir col -->
    </div>
    <!-- Akhir row -->



  </div>

  <?php
  include("connection.php");

  // $sql2 = "SELECT kode_barang FROM tb_barang ORDER BY DESC LIMIT 1";
  // $q = mysqli_query($conn, $sql2);
  // $data = mysqli_fetch_array($q);
  // if ($data) {
  //   $no_terakhir = substr($data['kode_barang'], -3);
  //   $no = $no_terakhir + 1;
  //   if ($no > 0 and $no < 10) {
  //     $kode = "00" . $no;
  //   } else if ($no > 10 and $no < 100) {
  //     $kode = "0" . $no;
  //   } else if ($no > 100) {
  //     $kode = $no;
  //   }
  // } else {
  //   $kode = "001";
  // }

  // $tahun = date('Y');
  // $kode_barang = "B-" . $tahun . $kode;


  if (isset($_POST['bsimpan'])) {
    $kode_barang = $_POST['tkode'];
    $nama_barang = $_POST['tnama'];
    $asal_barang = $_POST['tasal'];
    $jumlah_barang = $_POST['tjumlah'];
    $satuan_barang = $_POST['tsatuan'];
    $tanggal_diterima = $_POST['ttanggal_diterima'];


    $sql = "INSERT INTO tb_barang (kode_barang, nama_barang, asal_barang, jumlah_barang, satuan_barang, tanggal_diterima) VALUES ('$kode_barang', '$nama_barang', '$asal_barang', '$jumlah_barang', '$satuan_barang', '$tanggal_diterima')";
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Success Insert Data!');</script>";
      echo "<script>window.location='index.php';</script>";
    } else {
      echo "<script>alert('Failed to Insert Data!');</script>";
      // echo "<script>alert('Failed to Insert Data!. - Kode Barang - Cannot be the same!');</script>";
      // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  ?>
  <!-- Akhir container -->
  <!-- Script -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>