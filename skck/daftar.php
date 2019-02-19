<!DOCTYPE html>
<html lang="en">
<head>
<title>SKCK</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>


<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
			<div class="logo"><a href="#"><span>POLRI</span></a></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-2">
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.html">Beranda</a></li>
								<li><a href="about.html">Tentang</a></li>
								<li class="active"><a href="services.html">SKCK</a></li>
								
								<li><a href="contact.html">Kontak</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header_right d-flex flex-row align-items-center justify-content-start">

			

				<!-- Phone -->
				<div class="phone d-flex flex-row align-items-center justify-content-start">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<di>101</div>
				</div>

				<!-- Hamburger -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>	
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<div class="menu_nav trans_500">
				<ul class="text-center">
					<li><a href="index.html">Beranda</a></li>
					<li><a href="about.html">Tentang</a></li>
					<li><a href="services.html">SKCK</a></li>
					<li><a href="contact.html">Kontak</a></li>
				</ul>
			</div>
			<div class="phone menu_phone d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>101</div>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_image"><img src="images/logo.png"  width="200px" height="200px"> </div>
						<div class="home_title">Surat Keterangan Catatan Kepolisian </div>		
					</div>
				</div>
			</div>
		</div>
		<div class="domain_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="domain_search">
							<div class="domain_search_background"></div>
							<div class="domain_search_overlay"></div>
							<form method="POST" action="daftar.php" class="domain_search_form" id="domain_search_form">
								<input type="text" class="domain_search_input" name="nik" placeholder="Nomor Induk Kependudukan" required="required">
								<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-center">
									
								
								</div>
								<button type="submit" class="domain_search_button">DAFTAR</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Services -->

	<!-- Boxes -->

	<div class="boxes">
		<div class="container">
			<div class="row">

				<!-- Boxes Image -->
				<div class="col-lg-6">
					<div class="boxes_image">
						<div class="background_image box_image" style="background-image:url(images/skck.jpg)"></div>
					</div>
				</div>

				<!-- Boxes Content -->
				<div class="col-lg-6">
					<div class="boxes_content">
						<div class="section_title"><h2>Pendaftaran Permohonan SKCK Online</h2></div>
						<div class="boxes_text">
							<p>
								<?php
								include 'koneksi.php';
								$nik = $_POST['nik'];
								$url = "http://localhost/e_ktp/get_profil.php?nik=".$nik;
								$res = json_decode(file_get_contents($url));
								if($res->status == "sukses"){
									$data=($res->profil);
									$nik=$data->nik;
									$tgl_lahir=$data->tgl_lahir;
									$tempat_lahir=$data->tempat_lahir;
									$nama=$data->nama;
									$alamat=$data->provinsi." ".$data->kabupaten." ".$data->kecamatan;

										echo "
											<h3><b>Data Anda</b><hr />
											Nik           : $nik <br />
											Nama          : $nama <br />
											Tanggal Lahir : $tgl_lahir <br />
											Tempat Lahir  : $tempat_lahir <br />
											Alamat        : $alamat <hr />
											<b>Anda Sukses Mendaftar SKCK Online
											<br>
												Harap membawa lampiran terkait ke polres Setempat</br>
											</b>
											</h3>
										";

										$q=$db->prepare("insert into $app.pendaftar (nik,nama,alamat) values ('$nik','$nama','$alamat');");
										$q->execute();
									}
									else {
										echo "$nik tidak ditemukan";
									}
								?>
							</p>
								
							<p></p>
						</div>
						<!-- Accordions -->


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Features -->

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
			<div>Butuh Bantuan? Telfon Kami 24/7 Seluruh Indonesia</div>
			<div class="d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>101</div>
			</div>
		</div>
		<div class="footer_content">
			<div class="container">
				<div class="row footer_row">




					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="footer_title"> </div>
						<div class="footer_list">
						<ul>
								
						</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="footer_title"> </div>
						<div class="footer_list">
							<ul>
								
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="footer_title"> </div>
						<div class="footer_list">
							<ul>
								
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-md-6">
						<div class="logo footer_logo"><a href="#"><span>MABES</span> POLRI</a></div>
						<ul>
							<div class="footer_title">Kontak Resmi</div>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div> <ul>
										 Untuk urusan antar lembaga atau kemitraan berskala nasional : </ul></div>
								</li>
							</ul>
							<div class="footer_info">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Alamat</div></div>
									<div>Jl. Trunojoyo No.3,Jakarta Selatan Daerah Khusus Ibukota Jakarta 12110</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Tlp</div></div>
									<div>+6221-7218638</div>
								</li>

								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Fax</div></div>
									<div>+6221-7218741</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>ymabes@polri.go.id</div>
								</li>
							</ul>
						</div>
						
						<div class="social footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dikelola </i> oleh <a href="https://colorlib.com" target="_blank">POLRI</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>