<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Biodata</title>
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

        public function isidata($nama, $jenis_kelamin, $prodi)
        {
            $this->nama = $nama;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->prodi = $prodi;
        }

        public function cetakdata()
        {
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
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jenis Prodi</th>
                                            </tr>';
            echo "<tr><th>" . $this->nama . "</th><th>" . $this->jenis_kelamin . "</th><th>" . $this->prodi . "</th></tr>";
            echo '
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir card -->
                        </div>
                        <!-- Akhir container -->';
        }

        public function inputdata()
        {
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
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="Laki-Laki" required />
                                <label for="Laki-Laki">Laki-Laki</label>
                                <input type="radio" name="jenis_kelamin" value="Perempuan" id="Perempuan" required />
                                <label for="Perempuan">Perempuan</label>
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
        }
    }
    ?>
</body>

</html>