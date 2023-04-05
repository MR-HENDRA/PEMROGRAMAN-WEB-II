<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Form Update</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Leckerli+One&family=Lilita+One&family=Quicksand:wght@400;700&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            scroll-behavior: smooth;
        }

        #div-utama {
            box-shadow: 1px 7px 7px 7px #ECF2FF;
            border-radius: 10px;
        }

        #footer {
            background-color: #0002A1;
            padding: 15px;
        }
    </style>
</head>

<body>
    <?php
    include("connection.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_barang WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_assoc($result)) :
    ?>
        <!-- Awal container -->
        <div class="container mt-5 mb-3">
            <!-- Awal row -->
            <div class="row">
                <!-- Awal col -->
                <div class="col-md-6 mx-auto">
                    <!-- Awal card -->
                    <div class="card" id="div-utama">
                        <div class="card-header text-light" style="background-color: #0002A1;">
                            <h5 style="font-weight:bold; text-align:center">FORM UPDATE DATA BARANG</h5>

                        </div>
                        <div class="card-body">
                            <!-- Awal form -->
                            <form action="#" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Kode Barang</label>
                                    <input type="text" name="tkode" class="form-control" value="<?= $data['kode_barang'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Barang</label>
                                    <input type="text" name="tnama" class="form-control" value="<?= $data['nama_barang'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Asal Barang</label>
                                    <select class="form-select" name="tasal" required>
                                        <option value="<?= $data['asal_barang'] ?>"><?= $data['asal_barang'] ?></option>
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
                                            <input type="number" name="tjumlah" class="form-control" value="<?= $data['jumlah_barang'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Satuan</label>
                                            <select class="form-select" name="tsatuan" required>
                                                <option value="<?= $data['satuan_barang'] ?>"><?= $data['satuan_barang'] ?></option>
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
                                            <input type="date" name="ttanggal_diterima" class="form-control" value="<?= $data['tanggal_diterima'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <hr>
                                        <button class="btn text-light" style="background-color: #0002A1; font-weight:bold;" name="bsimpan" type="submit">Save Changes</button>
                                        <a href=" index.php" class="btn text-light" style="background-color: #F32424; font-weight:bold;">Cancel</a>
                                    </div>
                                </div>

                            </form>

                            <!-- Akhir form -->

                        </div>
                        <div id="footer" class="card-footer">
                        </div>
                    </div>

                    <!-- Akhir card -->
                </div>
                <!-- Akhir col -->
            </div>
            <!-- Akhir row -->
        </div>
    <?php
    endwhile;
    ?>

    <?php
    include("connection.php");
    if (isset($_POST['bsimpan'])) {
        $kode_barang = $_POST['tkode'];
        $nama_barang = $_POST['tnama'];
        $asal_barang = $_POST['tasal'];
        $jumlah_barang = $_POST['tjumlah'];
        $satuan_barang = $_POST['tsatuan'];
        $tanggal_diterima = $_POST['ttanggal_diterima'];


        $sql = "UPDATE tb_barang SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', asal_barang = '$asal_barang', jumlah_barang = '$jumlah_barang', satuan_barang = '$satuan_barang', tanggal_diterima = '$tanggal_diterima' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Success Update Data!');</script>";
            echo "<script>window.location='index.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
    <!-- Akhir container -->
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>