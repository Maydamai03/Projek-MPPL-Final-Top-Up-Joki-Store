<?php


    $cn = new mysqli("localhost","root","","mpplfinal");

    if ($cn->connect_error) {
        die("Koneksi Gagal: " . $cn->connect_error);
    }

?>