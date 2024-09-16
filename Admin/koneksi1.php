<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "spk_dosen");

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='../loginadmin.php';</script>";
    header('location:../loginadmin.php');
    exit();
}
?>