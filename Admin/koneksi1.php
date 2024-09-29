<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "spk_dosen");

if (!isset($_SESSION['admin']) && !isset($_SESSION['dosen'])) {
    // echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='../loginadmin.php';</script>";
    exit();
}
?>
