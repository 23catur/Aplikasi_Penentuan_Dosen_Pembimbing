<?php include 'koneksi2.php' ?>
<!-- 
<?php
$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE id_mahasiswa='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/header.php' ?>
</head>
<body>
<?php include 'includes/navbar.php' ?>
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Input Nilai</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-md-12">
    <div class="wrapper">
        <div class="row no-gutters">
            <div class="col-lg-12 col-md-12 order-md-last d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <div class="col-md-8">
                                <h3 class="mb-12">Masukkan Nilai</h3>
                                <p>Keterangan Singkatan: <br>
                                    Kriteria Bidang Keahlian : A <br>
                                    Kriteria Matakuliah : B <br>
                                </p>
                            </div>
									<div class="col-md-4" style="padding-left: 0; margin-left: -350px;">
										<img src="images/gap.png" alt="Deskripsi gambar" class="img-fluid" style="max-width: 130%; height: auto;">
									</div>
								</div>
							</div>
									<form method="POST" >
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="judul">Judul</label>
												<input type="text" class="form-control" name="judul" id="judul" required placeholder="Masukkan judul">
											</div>
										</div>
										<div class="col-md-12" style="color:red">
													<label class="label">BIDANG KEAHLIAN</label>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="a1">Teknik Elektro (A1)</label>
													<input type="double" class="form-control" name="a1" id="a1" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="a2">Teknologi Informasi (A2)</label>
													<input type="double" class="form-control" name="a2" id="a2" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="a3">Ilmu Komputer (A3)</label>
													<input type="double" class="form-control" name="a3" id="a3" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="a4">Cyber Security (A4)</label>
													<input type="double" class="form-control" name="a4" id="a4" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-12" style="color:red">
													<label class="label">MATA KULIAH</label>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b1">Mobile Programming (B1)</label>
													<input type="double" class="form-control" name="b1" id="b1" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b2">Web Programming (B2)</label>
													<input type="double" class="form-control" name="b2" id="b2" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b3">Administrasi Database (B3)</label>
													<input type="double" class="form-control" name="b3" id="b3" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b4">Cyber Security (B4)</label>
													<input type="double" class="form-control" name="b4" id="b4" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b5">Internet Of Thing (IoT) (B5)</label>
													<input type="double" class="form-control" name="b5" id="b5" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b6">Jaringan Komputer (B6)</label>
													<input type="double" class="form-control" name="b6" id="b6" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b7">Big Data (B7)</label>
													<input type="double" class="form-control" name="b7" id="b7" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>		
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b8">Machine Learning (B8)</label>
													<input type="double" class="form-control" name="b8" id="b8" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b9">Manajemen Teknologi Informasi (B9)</label>
													<input type="double" class="form-control" name="b9" id="b9" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b10">Software Engineering (B10)</label>
													<input type="double" class="form-control" name="b10" id="b10" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="b11">Rekayasa Perangkat Lunak (B11)</label>
													<input type="double" class="form-control" name="b11" id="b11" required placeholder="Berupa angka 1 - 5">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													
  													<input type="checkbox" name="keterangan" value="keterangan" required> Data yang sudah terisi tidak bisa di ubah<br>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Simpan" class="btn btn-primary" name="submit" href="listdospem.php">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- database -->
				<?php
					if (isset($_POST['submit'])) {
						
						$id_mahasiswa = $_SESSION["id_mahasiswa"];

						$ambil = $koneksi->query("SELECT * FROM nilai_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
						$pecah = $ambil->fetch_assoc();
						
						if($pecah> 0){
							echo "<div class='alert alert-info'>Anda sudah input nilai</div> ";
							
						}
						else{
							$id_mahasiswa = $_SESSION["id_mahasiswa"];
							$judul = $_POST['judul'];
							$koneksi->query("INSERT INTO nilai_mahasiswa(id_mahasiswa, judul, a1, a2, a3, a4, b1, b2, b3, b4, b5, b6, b7, b8, b9, b10, b11) 
								VALUES('$id_mahasiswa','$judul','$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[b1]','$_POST[b2]','$_POST[b3]','$_POST[b4]','$_POST[b5]','$_POST[b6]','$_POST[b7]','$_POST[b8]','$_POST[b9]','$_POST[b10]','$_POST[b11]')");
							
							echo "<div class='alert alert-info'>Data Tersimpan</div>";
							echo "<meta http-equiv='refresh' content='1;url=listdospem.php'>";
						}
					}
					?>
			</div>
		</div>
    </section>
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/loader.php' ?>
	</body>
	</html>