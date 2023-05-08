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
        echo "
        <form action='' method='post'>
        Nama : 
        <input type='text' name='nama'><br>
        Jenis Kelamin : 
        <input type='radio' name='jenis_kelamin' value='laki-laki' id='laki-laki' required />
        <label for='laki-laki'>Laki-Laki</label>
        <input type='radio' name='jenis_kelamin' value='perempuan' id='perempuan' />
        <label for='perempuan'>Perempuan</label><br>
        Prodi :
        <select name='prodi'>
            <option value='Informatika'>Informatika</option>
            <option value='Sipil'>Sipil</option>
            <option value='PWK'>PWK</option>
        </select><br>

        <input type='submit' name='tombol' value='Input Mhs'>";
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
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Nama</th><th>Jenis Kelamin</th><th>Prodi</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['nama'] . "</td><td>" . $row['jenis_kelamin'] . "</td><td>" . $row['prodi'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "";
            // echo "Tidak ada data mahasiswa.";
        }
    }

    public function __destruct()
    {
        // Tutup koneksi ke database
        mysqli_close($this->koneksi);
    }
}
