<?php
$koneksi = new mysqli("localhost", "root", "", "spk_dosen");

session_start();
if (!isset($_SESSION["mahasiswa"])) {
    header('Location:loginuser.php?first=true');
}
?>