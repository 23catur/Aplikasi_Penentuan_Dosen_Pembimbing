<?php
session_start();
include 'koneksi.php';
$error = '';

if (isset($_POST["login"])) {
    if (!empty($_POST["id_mahasiswa"]) || !empty($_POST["pass"]) || !empty($_POST["username"])) {
        # Get username and password from user
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        # Write MySql Query
        $query = "SELECT * FROM mahasiswa 
        WHERE username='$username' AND pass='$pass'";
        # Get the query result
        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // var_dump($row);
            // return;
            

                $_SESSION["id_mahasiswa"] = $row['id_mahasiswa'];
                $_SESSION["username"] = $username;
                $_SESSION["nama"] = $row['nama'];
                header("Location: index.php");
            
        } else {
            $error = urlencode("Username atau password salah!");
            header("Location: loginuser.php?pesan=$error");
        }

        # Close connection to database
        mysqli_close($koneksi);
    } else {
        $error = urlencode("Username atau password kosong!");
        header("Location: loginuser.php?pesan=$error");
    }
}
