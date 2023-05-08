<?php
// contoh class
class mahasiswa
{
    // property class
    public $nim;
    public $nama;

    // method class
    public function isidata($nim, $nama)

    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function cetakdata()
    {
        echo "Cetak NIM Didalam Class: " . $this->nim . "<br>";
        echo "Cetak Nama Didalam Class: " . $this->nama . "<br>";
    }

    public function inputdata()
    {
        echo "
        <form action='' method='post'>
        NIM : <input type='text' name='nim'><br>
        Nama : <input type='text' name='nama'><br>
        <input type='submit' name='tombol' value='Input Mhs'>";
    }

    public function terimadata()
    {
        $this->nim = $_POST['nim'];
        $this->nama = $_POST['nama'];
    }
} // end of class
