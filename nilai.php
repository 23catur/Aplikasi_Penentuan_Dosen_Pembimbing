<?php include 'koneksi2.php'; ?>
<!-- <?php session_start(); // Memulai session ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/header.php'; ?>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
 
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="listdospem.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Nilai <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Nilai</h1>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <?php 
    $id_mahasiswa = $_SESSION["id_mahasiswa"];
    $ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa JOIN mahasiswa ON nilai_mahasiswa.id_mahasiswa='$id_mahasiswa' AND mahasiswa.id_mahasiswa='$id_mahasiswa'"); 
    ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>

    <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading"></span>
            <h2 class="mb-4">Nilai Mahasiswa</h2>
            <h3 class="mb-4">(<?php echo $pecah['nama']; ?>)</h3>
            <h4 class="mb-4"><?php echo $pecah['judul']; ?></h4>
        </div>
    </div>

    <div class="row justify-content-center pb-4">
        <p><a href="hitung.php" name="save" class="btn btn-primary">Hitung Profile Matching</a></p>
    </div>

    <br><br> <br><br>           
    <br><br> <br><br>
    <br><br> <br><br>  
    <br><br> <br><br>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="login-wrap p-1 p-md-10">
                    <div class="col-md-2 col-lg-2">
                        <a class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/bidang.png);">
                            <div class="text w-100 text-center">
                                <h3>Bidang Keahlian</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-10">
                        <br>
                        <center>
                            <p>Teknik Elektro: <?php echo $pecah['a1']; ?></p>
                            <p>Teknologi Informasi: <?php echo $pecah['a2']; ?></p>
                            <p>Ilmu Komputer: <?php echo $pecah['a3']; ?></p>
                            <p>Cyber Security: <?php echo $pecah['a4']; ?></p>
                        </center>
                    </div>
                </div>

                <div class="login-wrap p-1 p-md-6">
                    <div class="col-md-1 col-lg-2">
                        <a class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/matkul.png);">
                            <div class="text w-100 text-center">
                                <h3>Mata Kuliah</h3>
                            </div>
                        </a>
                    </div> 
                    <div class="col-md-11">
                        <center>
                            <p>Mobile Programming: <?php echo $pecah['b1']; ?></p>
                            <p>Web Programming: <?php echo $pecah['b2']; ?></p>
                            <p>Administrasi Database: <?php echo $pecah['b3']; ?></p>
                            <p>Cyber Security: <?php echo $pecah['b4']; ?></p>
                            <p>Internet Of Thing (IoT): <?php echo $pecah['b5']; ?></p>
                            <p>Jaringan Komputer: <?php echo $pecah['b6']; ?></p>
                            <p>Big Data: <?php echo $pecah['b7']; ?></p>
                            <p>Machine Learning: <?php echo $pecah['b8']; ?></p>
                            <p>Manajemen Teknologi Informasi: <?php echo $pecah['b9']; ?></p>
                            <p>Software Engineering: <?php echo $pecah['b10']; ?></p>
                            <p>Rekayasa Perangkat Lunak: <?php echo $pecah['b11']; ?></p>
                        </center>
                    </div>
                </div>
            </div>

            <?php } ?>

            <div class="col-md-12 text-center mt-5">
                <!-- <a href="listdospem.php" class="btn btn-secondary">See All Courses</a> -->
            </div>

            <?php
            // Cek apakah form sudah pernah dikirim
            if (isset($_SESSION['form_submitted']) && $_SESSION['form_submitted'] == true) {
                echo "<div class='alert alert-warning'>Form sudah pernah dikirim.</div>";
                // Jika Anda ingin menampilkan data yang sudah ada
                $queryCheck = $koneksi->query("SELECT * FROM hasilhitung WHERE id_mahasiswa = '$id_mahasiswa'");
                if ($queryCheck->num_rows > 0) {
                    $dataHasil = $queryCheck->fetch_assoc();
                    echo "<p>Nama: " . $dataHasil['nama'] . "</p>";
                    echo "<p>Nama Dospem: " . $dataHasil['nama_dospem'] . "</p>";
                    echo "<p>Hasil: " . $dataHasil['hasil'] . "</p>";
                    echo "<p>Tanggal: " . $dataHasil['tanggal'] . "</p>";
                }
            } else {
                if (isset($_POST['save'])) {
                    // Cek apakah data untuk ID mahasiswa ini sudah ada di tabel hasilhitung
                    $queryCheck = $koneksi->query("SELECT * FROM hasilhitung WHERE id_mahasiswa = '$id_mahasiswa'");
                    
                    if ($queryCheck->num_rows == 0) {
                        // Jika tidak ada, lakukan penyimpanan
                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal = date("Y-m-d H:i:s");

                        // Ambil data mahasiswa berdasarkan id_mahasiswa
                        $ambilData = $koneksi->query("SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
                        $dataMahasiswa = $ambilData->fetch_assoc();
                        
                        $nama = $dataMahasiswa['nama'];
                        $nama_dospem = "Nama Dosen Pembimbing"; // Ganti dengan nama dosen pembimbing yang sesuai
                        $rank = "Rank"; // Ganti dengan hasil perhitungan yang sesuai
                        
                        // Insert data ke dalam tabel hasilhitung
                        $koneksi->query("INSERT INTO hasilhitung(id_mahasiswa, nama, nama_dospem, hasil, tanggal) 
                                         VALUES('$id_mahasiswa', '$nama', '$nama_dospem', '$rank', '$tanggal')");
                        
                        echo "<div class='alert alert-info'>Data Tersimpan</div>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                        
                        // Set session form_submitted menjadi true
                        $_SESSION['form_submitted'] = true;
                    } else {
                        // Jika sudah ada, tampilkan data yang sudah ada
                        $dataHasil = $queryCheck->fetch_assoc();
                        echo "<div class='alert alert-warning'>Data sudah tersimpan sebelumnya.</div>";
                        echo "<p>Nama: " . $dataHasil['nama'] . "</p>";
                        echo "<p>Nama Dospem: " . $dataHasil['nama_dospem'] . "</p>";
                        echo "<p>Hasil: " . $dataHasil['hasil'] . "</p>";
                        echo "<p>Tanggal: " . $dataHasil['tanggal'] . "</p>";
                    }
                }
            }
            ?>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/loader.php'; ?>

    <script>
    document.querySelector("form").addEventListener("submit", function() {
        document.querySelector("button[name='save']").disabled = true;
    });
    </script>
</body>
</html>
