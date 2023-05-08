<?php
require('form1.php');
$objectmhs = new mahasiswa(); // create object
if (!isset($_POST['tombol'])) {
    $objectmhs->inputdata();
} else {
    $objectmhs->terimadata();
    $objectmhs->cetakdata();
}
