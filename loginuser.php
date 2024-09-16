<?php
// session_start();
include 'includes/header.php'; 
include 'includes/navbar.php'; 

// Debugging output
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

if (isset($_SESSION['nama'])) {
    $welcomeMessage = "Halo, " . htmlspecialchars($_SESSION['nama']);
} else {
    $welcomeMessage = "Halo, Pengguna";
}
if (isset($_GET['pesan'])) {
	$mess="<p>{$_GET['pesan']}</p>";
}else{
	$mess = "";
}
?>

	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Login<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Login User</h1>
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
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 text-center">Halaman Login User</h3>
									<form method="POST" action="loginuserProcess.php" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="name">Username</label>
													<input type="text" class="form-control" name="username" id="username" placeholder="Username">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Password</label>
													<input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
                                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
													<p class="mb-4">Admin? <a href="loginadmin.php"> Login berikut</a></p>
													<?php echo $mess;?>

												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<img src="images/pnup11.png" width="270px">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section> 
   

    <?php include 'includes/footer.php' ?>
    <?php include 'includes/loader.php' ?>
	</body>
	</html>