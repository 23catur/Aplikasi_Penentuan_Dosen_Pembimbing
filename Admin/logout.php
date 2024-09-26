<?php
    session_start();

    if (isset($_SESSION['nilai_sebelumnya'])) {
        setcookie('nilai_sebelumnya', json_encode($_SESSION['nilai_sebelumnya']), time() + (86400 * 30), "/"); // Cookie berlaku 30 hari
    }
    
    if(session_destroy()) {
        header("Location: ../index.php");
    }
