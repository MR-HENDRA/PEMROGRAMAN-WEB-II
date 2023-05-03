<?php
include"form.php";
echo"<html><head><tittle>Mahasiswa</tittle></head><body>";
$form = new Form("", "Input Form");
$form->addFields("txtnim", "NIM");
$form->addFields("txtnama", "Nama");
$form->addFields("txtalamat", "Alamat");
echo"<h3>Silahkan isi form berikut ini: </h3>";
$form->displayForm();
echo"</body></html>";
