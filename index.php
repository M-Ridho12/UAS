<?php 
	$msg = "";
// if submited
if(isset($_POST['upload'])){

	$target = "gambar/portfolio/".basename($_FILES['image']['name']);

	$db = mysqli_connect("localhost","root","","gallery");

	$image = $_FILES['image']['name'];

	$sql   = "INSERT INTO images (image) VALUES ('$image')";
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "image uploaded";
	}else{
		$msg = "there was a problem";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<meta name="Viewport" content="width=device-wwidth, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/pink.css">

	<!-- Style Switcher - Demo -->
	<link rel="stylesheet" class="alternate-style" type="text/css" title="pink" href="css/pink.css" disabled>
	<link rel="stylesheet" class="alternate-style" type="text/css" title="blue" href="css/blue.css" disabled>
	<link rel="stylesheet" class="alternate-style" type="text/css" title="yellow" href="css/yellow.css" disabled>
	<link rel="stylesheet" class="alternate-style" type="text/css" title="green" href="css/green.css" disabled>
	<link rel="stylesheet" class="alternate-style" type="text/css" title="orange" href="css/orange.css" disabled>
	<link rel="stylesheet" type="text/css" href="css/styleSwitcher.css">

</head>
<body>




	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			
		</div>
	</div>
	<!-- Preloader End-->

	<!-- Main Container -->
	<div class="=main-container">
		<!-- Aside -->
		<div class="aside">
			<!-- LOgo -->
			<div class="logo">
				<a href="#">Fantasy</a>
			</div>
			<!-- Nav Toggler Btn -->
			<div class="nav-toggler">
				<span></span>
			</div>
			<!-- Nav -->
			<ul class="nav">
				<li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
				<li><a href="#about"><i class="fa fa-user"></i> About</a></li>
			
				<li><a href="#portfolio"><i class="fa fa-briefcase"></i> Portfolio</a></li>

				<li><a href="#contact"><i class="fa fa-comments"></i> Contact</a></li>
			</ul>
			<!-- Copyright -->
			<div class="copyright-text">
				&copy; 2020 Ridho Project
			</div>
		</div>
		<!-- Aside End -->
		<!-- Main Content -->
		<div class="main-content">

			<!-- Home Section -->
			<section class="home section active" id="home">
				<div class="container">
					<div class="intro">
						<img src="gambar/profil.jpg" alt="profile" width="270" height="270" class="shadow-dark">
						<h1>Ridho</h1>
						<p>Hello Everyone !</p>
						<div class="social-links">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/Ridho Muh/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/m_ridho_g_12/"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</section>
			<!-- Home Section  End-->

			<!-- About Section -->
			<section class="about section" id="about">
				<div class="container">
					<div class="row">
						<div class="section-title padd-15">
							<h2>About Me</h2>
						</div>
					</div>
					<div class="row">
						<div class="about-content padd-15">
							<div class="row">
								<div class="about-text padd-15">
									<h3>I'm Ridho and a <span>Informatics Engineering</span> student</h3>
									<p>Hi ! My name is Muhammad Ridho Ga Saja,and I am a 2nd semester Informatics Engineering student at Industrial Technology Faculty at Ahmad Dahlan University</p>
								</div>
							</div>
							<div class="row">
								<div class="personal-info padd-15">
									<div class="row">
										<div class="info-item padd-15">
											<p>Birthday : <span>27 Januari 20002</span></p>
										</div>
										<div class="info-item padd-15">
											<p>Age : <span>19</span></p>
										</div>
										<div class="info-item padd-15">
											<p>Website : <span>www.domain.com</span></p>
										</div>
										<div class="info-item padd-15">
											<p>Email : <span>m.ridho.g.111@gmail.com</span></p>
										</div>
										<div class="info-item padd-15">
											<p>Majors : <span>Informatics Engineering</span></p>
										</div>
										<div class="info-item padd-15">
											<p>Phone : <span>+62 852 5433 9501</span></p>
										</div>
										<div class="info-item padd-15">
											<p>City : <span>Yogyakarta</span></p>
										</div>
										<div class="info-item padd-15">
											<p>Profession : <span>College Student</span></p>
										</div>
									</div>
									<div class="row">
										<div class="buttons padd-15">
											
											<a href="#contact" data-section-index="1" class="btn hire-me">Contact</a>
										</div>
									</div>
								</div>
								<div class="skills padd-15">
									<div class="row">
										<div class="skill-item padd-15">
											<h5>http</h5>
											<div class="progress">
												<div class="progress-in" style="width: 50%"></div>
												<div class="skill-percent">50%</div>
											</div>
										</div>
										<div class="skill-item padd-15">
											<h5>Css</h5>
											<div class="progress">
												<div class="progress-in" style="width: 40%"></div>
												<div class="skill-percent">50%</div>
											</div>
										</div>
										<div class="skill-item padd-15">
											<h5>Javascript</h5>
											<div class="progress">
												<div class="progress-in" style="width: 40%"></div>
												<div class="skill-percent">50%</div>
											</div>
										</div>
										<div class="skill-item padd-15">
											<h5>php</h5>
											<div class="progress">
												<div class="progress-in" style="width: 50%"></div>
												<div class="skill-percent">50%</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							
												<!-- timeline Item End-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About Section End-->

			<!-- Service Section -->
			<!-- Service Section End-->

			<!-- Portfolio Section -->

			<section class="portfolio section" id="portfolio">
			
				<div class="container">
					<div class="row">
						<div class="section-title padd-15">
							<h2>Portfolio</h2>
						</div>
					</div>

						

					<div id="content">
							<form method="post" action="index.php" enctype="multipart/form-data">
								<input type="hidden" name="size" value="1000000">
								<div>
									<input type="file" name="image">
								</div>
								<div>
									<input type="submit" name="upload" class="btn" value="Upload">
								</div>
							</form>
					</div>
					<div class="row">
						<div class="portfolio-filter padd-15">
							<button type="button" class="active" data-filter="all">Gallery</button>
						</div>
					</div>
					<div class="row ">
						<!-- Portfolio Item -->
						<div class="portfolio-item padd-15" data-category="photography">
							<div class="portfolio-item-inner shadow-dark">
								<div class="portfolio-img">
									<img src="gambar/portfolio/1.jpg" alt="portfolio">
								</div>
								<div class="portfolio-info">
									<h4></h4>
									<div class="icon">
										<i class="fa fa-search"></i>
									</div>
								</div>
							</div>
						</div>

						<?php 

							$db = mysqli_connect("localhost","root","","gallery");
							$sql = "SELECT * FROM images ";
							$result = mysqli_query($db, $sql);
							while ($row = mysqli_fetch_array($result)) {
							
								echo "<div class='portfolio-item padd-15' data-category='photography'>";
									echo "<div class='portfolio-item-inner shadow-dark'>";
										echo "<div class='portfolio-img'>";
											echo "<div id='img_div'>";
												echo "<img src='gambar/portfolio/".$row['image']."' >";
											echo "</div>";
										echo "</div>";
										echo "<div class='portfolio-info'>";
											echo "<h4>";
											echo "</h4>";
											echo "<div class='icon'>";
												echo "<i  class='fa fa-search'>";
												echo "</i>";
											echo "</div>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
						
							}
	 					?>

					
						<!-- Portfolio Item End -->
					</div>

				</div>
			</section>
			<!-- Portfolio Section End-->



			<!-- Contact Section -->
			<section class="contact section" id="contact">
				<div class="container">
					<div class="row">
						<div class="section-title padd-15">
							<h2>Contact Me</h2>
						</div>
					</div>
					<div class="row">
						<!-- contact-info-item -->
						<div class="contact-info-item padd-15">
							<div class="icon"><i class="fa fa-phone"></i></div>
							<h4>Call Me On</h4>
							<p>+62 852 5433 9501</p>
						</div>
						<!-- contact-info-item End-->
						<!-- contact-info-item -->
						<div class="contact-info-item padd-15">
							<div class="icon"><i class="fa fa-map-marker"></i></div>
							<h4>Addres</h4>
							<p>Pramuka.St, Pandeyan, Yogyakarta</p>
						</div>
						<!-- contact-info-item End-->
						<!-- contact-info-item -->
						<div class="contact-info-item padd-15">
							<div class="icon"><i class="fa fa-envelope"></i></div>
							<h4>Email</h4>
							<p>m.ridho.g.111@gmail.com</p>
						</div>
						<!-- contact-info-item End-->
					</div>

					<!-- Contact Form  -->
						<div class="row">
							<form class="contact-form padd-15">
								<div class="row">
									<div class="form-item col-6 padd-15">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name*">
										</div>
									</div>
									<div class="form-item col-6 padd-15">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Email*">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-item col-12 padd-15">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Subject*">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-item col-12 padd-15">
										<div class="form-group">
											<textarea class="form-control" placeholder="Your Message..."></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 padd-15">
										<button type="submit" class="btn">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					<!-- Contact Form End -->
				</div>
			</section>
			<!-- Contact Section End-->

		</div>
		<!-- Main Content End -->
	</div>
	<!-- Main Container -->

<!-- Light box -->
	<div class="lightbox ">
		<div class="lightbox-content">
			<div class="lightbox-close">&times;</div>
			<img src="gambar/portfolio/2.jpg" class="lightbox-img" onclick="nextItem()">
			<div class="lightbox-caption">
				<div class="caption-text"></div>
				<div class="caption-counter"></div>
			</div>
		</div>
		<div class="lightbox-controls">
			<div class="prev-item" onclick="prevItem()"><i class="fa fa-angle-left"></i></div>
			<div class="next-item" onclick="nextItem()"><i class="fa fa-angle-right"></i></div>
		</div>
	</div>
<!-- Light box End-->



<!-- Style Switcher - Demo -->
	<div class="style-switcher">
		<div class="toggle-style-switcher">
			<i class="fa fa-cog fa-spin"></i>
		</div>
		<h5>Style Switcher</h5>
		<ul>
			<li><a href="javascript:void(0)" title="pink" style="background-color: #ec1839" onclick="setActiveStyle('pink')"></a></li>
			<li><a href="javascript:void(0)" title="blue" style="background-color: #2196f3" onclick="setActiveStyle('blue')"></a></li>
			<li><a href="javascript:void(0)" title="yellow" style="background-color: #ffb400" onclick="setActiveStyle('yellow')"></a></li>
			<li><a href="javascript:void(0)" title="green" style="background-color: #72b626" onclick="setActiveStyle('green')"></a></li>
			<li><a href="javascript:void(0)" title="orange" style="background-color: #fa5b0f" onclick="setActiveStyle('orange')"></a></li>
		</ul>
		<h5>Theme</h5>
		<label>
			<input type="radio" class="body-skin" name="body-style" value="light" checked="true">
			Light
		</label>
		<label>
			<input type="radio" class="body-skin" name="body-style" value="dark">
			Dark
		</label>
	</div>
<!-- Style Switcher - Demo End-->



<!-- Template js -->
<script src="js/script.js"></script>

<!-- Style Switcher js - Demo -->
<script src="js/styleSwitcher.js"></script>

</body>
</html>










