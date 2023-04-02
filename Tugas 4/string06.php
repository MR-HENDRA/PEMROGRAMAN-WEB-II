<?php
//contoh 1
$warna = "merah hijau kuning biru jingga coklat hitam";
$warni = explode (" ", $warna);
echo $warni[0]."<br>"; // merah
echo $warni[5]."<br>"; // coklat

//contoh 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user."<br>"; // foo
echo $pass;
?>