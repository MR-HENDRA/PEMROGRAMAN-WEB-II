<?php
require('form2.php');
$mhs = new mahasiswa(); // create object
if (!isset($_POST['tombol'])) {
    $mhs->inputdata();
} else {
    $mhs->terimadata();
    $mhs->tampildata();
}
