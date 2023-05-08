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
} // end of class