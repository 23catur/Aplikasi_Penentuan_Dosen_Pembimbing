<?php
include('koneksi.php');
$sql = "DELETE FROM dospem WHERE id_dospem='$_GET[id]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location='dospem.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>