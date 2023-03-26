<?php

// Penghitungan bilangan faktorial
function factorial($num)
{
    if ($num == 0) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

// Enkripsi string dnegan metode ROT13
function rot13($string)
{
    return str_rot13($string);
}

// Melakukan validasi email
function validate_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}
