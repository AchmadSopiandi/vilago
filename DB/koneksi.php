<?php
$koneksi = mysqli_connect("localhost", "root", "", "vilago");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
