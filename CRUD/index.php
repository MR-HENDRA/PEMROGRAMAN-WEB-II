<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CRUD | HENDRA</title>
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

        #search {
            box-shadow: 1px 3px 3px 3px #ECF2FF;
            border-radius: 5px;
        }

        #insert {
            box-shadow: 1px 3px 3px 3px #ECF2FF;
            border-radius: 10px;
        }

        #footer {
            background-color: #0002A1;
            padding: 15px;

        }
    </style>
</head>

<body>

    <!-- Awal container -->
    <div class="container mt-5 mb-3">
        <!-- Awal card -->
        <div class="card" id="div-utama">
            <div class="card-header text-light" style="background-color: #0002A1;">
                <h5 style="font-weight:bold;">DATA BARANG</h5>
            </div>
            <div class=" card-body position-relative">
                <!-- Awal Searching Menu -->
                <div class="col-md-5 mx-auto" id="search">
                    <form action=" #" method="POST">
                        <div class="input-group mb-3">
                            <input type=" text" name="tcari" value="<?= @$_POST['tcari'] ?>" class="form-control" placeholder="Masukkan Kata Kunci!">
                            <button class="btn mx-1" name="bcari" type="submit" style="background-color:  #1363DF;"><i class=" fa-sharp fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                        </div>
                    </form>
                </div>
                <a href="insert.php" class="btn mb-3" style="background-color:#1363DF; box-shadow: 1px 3px 3px 3px #ECF2FF;
                border-radius: 5px;"><i class="fa-sharp fa-solid fa-folder-plus fa-lg" style="color: #ffffff;"></i></a>
                <!-- Akhir Searching Menu -->
                <!-- <i class="fa-sharp fa-solid fa-folder-plus"></i> -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered border-dark " style="text-align: center;">
                        <tr class="text-light" style="background-color: #1363DF;">
                            <th>No.</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Asal Barang</th>
                            <th>Jumlah</th>
                            <th>Tanggal Diterima</th>
                            <th>Aksi</th>
                        </tr>

                        <?php
                        include("connection.php");
                        $no = 1;

                        if (isset($_POST['bcari'])) {
                            $keyword = $_POST['tcari'];
                            $q = "SELECT * FROM tb_barang WHERE kode_barang like '%$keyword%' or nama_barang like '%$keyword%' or asal_barang like '%$keyword%' or tanggal_diterima like '%$keyword%' order by id desc  ";
                        } else {
                            $q = "SELECT * FROM tb_barang order by id desc";
                        }
                        $sql = mysqli_query($conn, $q);
                        while ($data = mysqli_fetch_array($sql)) :
                        ?>

                            <tr>
                                <th><?= $no++ ?></th>
                                <th style=" text-align: left;"><?= $data['kode_barang'] ?></th>
                                <th style="text-align: left;"><?= $data['nama_barang'] ?></th>
                                <th><?= $data['asal_barang'] ?></th>
                                <th><?= $data['jumlah_barang'] ?> <?= $data['satuan_barang'] ?></th>
                                <th><?= $data['tanggal_diterima'] ?></th>
                                <th>
                                    <div>
                                        <div style="text-align: center;">
                                            <a href="update.php? id= <?php echo $data["id"]; ?>"><i class="fa-solid fa-pen-to-square" style="color: #1363DF;"></i></a>
                                            <a href="delete.php? id= <?php echo $data["id"]; ?>" onclick="return confirm('Are you serious about deleting data?')"><i class="fa-solid fa-trash" style="color: #F32424;"></i></a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </table>
                </div>

            </div>
            <div id="footer" class="card-footer">
            </div>
        </div>
        <!-- Akhir card -->



    </div>
    <!-- Akhir container -->
    <!-- Script -->
    <script src=" https://kit.fontawesome.com/e11dcd3a63.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>