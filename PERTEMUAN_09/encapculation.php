<?php
class Mobil
{
    public $warna;
    public $merk;
    public $harga;
    function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "100000000";
    }
    function gantiwarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }
    function tampilWarna()
    {
        echo "Warna mobilnya: " . $this->warna;
    }
}
$a = new Mobil();
$b = new Mobil();

echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiwarna("Merah");
$a->tampilWarna();
//
echo "<br><b>Mobil kedua</b><br>";
$b->gantiwarna("Hijau");
$b->tampilWarna();
