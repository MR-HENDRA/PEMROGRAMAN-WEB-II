<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Biodata Mahasiswa</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Leckerli+One&family=Lilita+One&family=Quicksand:wght@400;700&display=swap');
  </style>
</head>

<body>
  <?php
  class mahasiswa
  {
    public $nama;
    public $jenis_kelamin;
    public $prodi;
    private $koneksi;

    public function __construct()
    {
      // Buat koneksi ke database
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "tugas9_web";
      $this->koneksi = mysqli_connect($host, $username, $password, $database);
    }

    public function isidata($nama, $jenis_kelamin, $prodi)
    {
      $this->nama = $nama;
      $this->jenis_kelamin = $jenis_kelamin;
      $this->prodi = $prodi;
    }

    public function inputdata()
    {
      // Input Data
      echo '
            <!-- Awal container -->
            <div class="container mt-5 mb-3">
              <!-- Awal row -->
              <div class="row">
                <!-- Awal col -->
                <div class="col-md-6 mx-auto">
                  <!-- Awal card -->
                  <div class="card" id="div-utama">
                    <div class="card-header text-light" style="background-color: #0002A1;">
                      <h5 style="font-weight:bold; text-align:center">FORM INPUT MAHASISWA</h5>
                    </div>
                    <div class="card-body">

                      <!-- Awal form -->
                      <form action="" method="POST">
                        <div class="mb-3">
                          <label class="form-label">Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Jenis Kelamin</label>
                          <input type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" required />
                          <label for="laki-laki">Laki-Laki</label>
                          <input type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" required />
                          <label for="perempuan">Perempuan</label>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Prodi</label>
                          <select class="form-select" name="prodi" required>
                            <option value="">-- pilih --</option>
                            <option value="Sipil">Sipil</option>
                            <option value="Informatika">Informatika</option>
                            <option value="PWK">PWK</option>
                          </select>
                        </div>
                          
                          <div class="text-center">
                            <button class="btn text-light" style="background-color: #0002A1;; font-weight:bold;" name="tombol" type="submit">Save</button>
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
        ';
    }

    public function terimadata()
    {
      $this->nama = $_POST['nama'];
      $this->jenis_kelamin = $_POST['jenis_kelamin'];
      $this->prodi = $_POST['prodi'];

      // Simpan data ke database
      $sql = "INSERT INTO mahasiswa (nama, jenis_kelamin, prodi) VALUES ('$this->nama', '$this->jenis_kelamin', '$this->prodi')";
      mysqli_query($this->koneksi, $sql);
    }

    public function tampildata()
    {
      // Ambil data dari database dan tampilkan
      $sql = "SELECT * FROM mahasiswa";
      $result = mysqli_query($this->koneksi, $sql);
      $no = 1;
      if (mysqli_num_rows($result) > 0) {
        echo '
                        <div class="container mt-5 mb-3">
                        <!-- Awal card -->
                            <div class="card" id="div-utama">
                                <div class="card-header text-light" style="background-color: #0002A1;">
                                    <h5 style="font-weight:bold; text-align: center; ">DATA MAHASISWA</h5>
                                </div>
                            <div class=" card-body position-relative">
                                <div class="table-responsive">
                                <table class="table table-hover table-bordered border-dark " style="text-align: center;">
                                    <tr class="text-light" style="background-color: #1363DF;">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jenis Prodi</th>
                                    </tr>';
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><th>" . $no++ . "</th><th>" . $row['nama'] . "</th><th>" . $row['jenis_kelamin'] . "</th><th>" . $row['prodi'] . "</th></tr>";
        }
        echo '
                            </table>
                        </div>
                    </div>
                    </div>
                    <!-- Akhir card -->
                    </div>
                    <!-- Akhir container -->';
      } else {
        echo "Tidak ada data mahasiswa.";
      }
    }


    public function __destruct()
    {
      // Tutup koneksi ke database
      mysqli_close($this->koneksi);
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>