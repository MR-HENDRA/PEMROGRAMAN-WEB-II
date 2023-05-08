<?php
require('mhs2.php');
$objectmhs1 = new mahasiswa(); // create object
if (!isset($_POST['tombol'])) {
    $objectmhs1->inputdata();
} else {
    $objectmhs1->terimadata();
    $objectmhs1->cetakdata();
}
