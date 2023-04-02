<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crud_pw2";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Failed Connection";
} else {
    echo "";
}
