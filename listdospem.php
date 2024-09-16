<?php include 'koneksi2.php' ?>

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
					<p class="breadcrumbs"><span class="mr-2"><a href="listdospem.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Daftar Dosen Pembimbing <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Daftar Dosen Pembimbing</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 sidebar">
					<div class="sidebar-box bg-white ftco-animate">
						<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" class="search-form">
							<div class="form-group">
								<?php
									$kata_kunci="";
									if (isset($_POST['kata_kunci'])) {
										$kata_kunci=$_POST['kata_kunci'];
									}
								?>
								<span class="icon fa fa-search"></span>
								<input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control" placeholder="Search...">
							</div>
							<div class="form-group">
								<button type="submit" value="Pilih" name="submit" class="btn btn-warning"><i class="fa fa-search"></i> Cari</button>
							</div>
						</form>
					</div>

					<!-- <div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">Course Category</h3>
						<form action="#" class="browse-form">
							<label for="option-category-1"><input type="checkbox" id="option-category-1" name="vehicle" value="" checked> Design &amp; Illustration</label><br>
							<label for="option-category-2"><input type="checkbox" id="option-category-2" name="vehicle" value=""> Web Development</label><br>
							<label for="option-category-3"><input type="checkbox" id="option-category-3" name="vehicle" value=""> Programming</label><br>
							<label for="option-category-4"><input type="checkbox" id="option-category-4" name="vehicle" value=""> Music &amp; Entertainment</label><br>
							<label for="option-category-5"><input type="checkbox" id="option-category-5" name="vehicle" value=""> Photography</label><br>
							<label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Health &amp; Fitness</label><br>
						</form>
					</div> -->
				</div>

				<div class="col-lg-9">
					<div class="row">
						<?php 
							if (isset($_POST['kata_kunci'])) {
								$kata_kunci=trim($_POST['kata_kunci']);
								$ambil = $koneksi->query("SELECT * FROM dospem WHERE nama_dospem LIKE '%".$kata_kunci."%' OR jabatan LIKE '%".$kata_kunci."%' ORDER BY id_dospem ASC"); 
							}else {
								$ambil = $koneksi->query("SELECT * FROM dospem ORDER BY id_dospem ASC"); 
							} 
						?>
        				<?php while ($pecah = $ambil->fetch_assoc()) { ?>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="detaildospem.php?id=<?php echo $pecah["id_dospem"] ?>" class="img" style="background-image: url(foto_dospem/<?php echo $pecah['foto']; ?>);">
									<span class="price">Dosen</span>
								</a>
								<div class="text p-4">
									<h3><a href="detaildospem.php?id=<?php echo $pecah["id_dospem"] ?>"><?php echo $pecah['nama_dospem']; ?></a></h3>
									<ul class="d-flex justify-content-between">
										<li><span class="flaticon-shower"></span><?php echo $pecah['jabatan']; ?></li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/footer.php' ?>
	<?php include 'includes/loader.php' ?>

	</script>
</body>
</html>