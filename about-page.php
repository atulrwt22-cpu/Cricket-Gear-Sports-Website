<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cricket Sports Website Home Page</title>
		<link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
		<script src="bootstrap/bootstrap.bundle.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	</head>
	<body>
		<!-- Navbar Started Here -->
		<?php include 'nav-bar.php'; ?>
		<!-- Navbar Ends Here -->

		<!-- Hero Banner Started Here -->
		<div>
      		<img src="images/about-img.jpg" class="hero-banner w-100">
  		</div>
  		<!-- Hero Banner Started Here -->

  		<main class="container-fluid m-0 p-0">
	  		<!--Breadcrumb-section Started Here-->
	  		<section class="breadcrumb-section">
				<div class="container">
					<a href="index.php">Home</a>
					<i class="bi bi-chevron-right px-0 mx-0"></i>
					<span>About Us</span>
				</div>
			</section>
			<!--Breadcrumb-section Ended Here-->

			<!--List Menu Started Here-->
			<section class="main-section">
		    	<div class="container">
		        	<div class="row g-4">
		            	<!-- ================= LEFT SIDEBAR ================= -->
		            	<?php
		            		include 'left-list-menu.php';
		            	?>
		                <!-- ================= RIGHT CONTENT ================= -->
		                <div class="col-lg-9">
		                    <div class="about-content">
		                        <!-- Heading -->
		                        <div class="page-heading">
		                            <h1>About Our Sports Website</h1>
		                            <div class="heading-line"></div>
		                        </div>
		                        <!-- Intro -->
		                        <p class="">
		                             CRICKET GEAR SPORTS is one of the oldest and largest Sports Equipment Manufacturing Industry in India, which is indulged in manufacturing of Sports Equipment in India since 1957 with over 69 years of manufacturing Excellence with 4 generations of experience and 3 generations running the business currently.
		                        </p>
		                        <p class="">
		                            Our goal is to make quality sports equipment
		                            easily accessible to everyone. From cricket
		                            and football to fitness and outdoor sports,
		                            we provide a wide range of products for
		                            different sporting needs.
		                        </p>
		                        <!-- Achievement Cards -->
		                        <div class="row g-3 achievement-row">
		                            <div class="col-md-4">
		                                <div class="achievement-card">
		                                    <div class="achievement-icon">
		                                        <i class="bi bi-award"></i>
		                                    </div>
		                                    <h4>10+</h4>
		                                    <p>Years Experience</p>
		                                </div>

		                            </div>
		                            <div class="col-md-4">
		                                <div class="achievement-card">
		                                    <div class="achievement-icon">
		                                        <i class="bi bi-globe2"></i>
		                                    </div>
		                                    <h4>25+</h4>
		                                    <p>Sports Categories</p>
		                                </div>
		                            </div>
		                            <div class="col-md-4">
		                                <div class="achievement-card">
		                                    <div class="achievement-icon">
		                                        <i class="bi bi-people"></i>
		                                    </div>
		                                    <h4>10K+</h4>
		                                    <p>Happy Customers</p>
		                                </div>
		                            </div>
		                        </div>
		                        <!-- Why Choose Us -->
		                        <div class="content-block">
		                            <h2> Why Choose Us?</h2>
		                            <div class="heading-line"></div>
		                            <ul class="about-list">
		                                <li>
		                                    <i class="bi bi-check-circle-fill"></i>
		                                    <span>
		                                        High-quality sports products at competitive prices.
		                                    </span>
		                                </li>
		                                <li>
		                                    <i class="bi bi-check-circle-fill"></i>
		                                    <span>
		                                        Wide range of sports equipment under one platform.
		                                    </span>
		                                </li>
		                                <li>
		                                    <i class="bi bi-check-circle-fill"></i>
		                                    <span>
		                                        Secure and reliable shopping experience.
		                                    </span>
		                                </li>
		                                <li>
		                                    <i class="bi bi-check-circle-fill"></i>
		                                    <span>
		                                        Fast delivery and customer support.
		                                    </span>
		                                </li>
		                            </ul>
		                        </div>
		                        <!-- Facilities -->
		                        <div class="content-block">
		                            <h2>Our Product Categories</h2>
		                            <div class="heading-line"></div>
		                            <div class="row g-3">
		                                <div class="col-md-4">
		                                    <div class="facility-card">
		                                        <i class="bi bi-dribbble"></i>
		                                        <h5>Cricket</h5>
		                                        <p>
		                                            Professional cricket equipment.
		                                        </p>
		                                    </div>
		                                </div>
		                                <div class="col-md-4">
		                                    <div class="facility-card">
		                                        <i class="bi bi-trophy"></i>
		                                        <h5>Football</h5>
		                                        <p>
		                                            Football equipment and accessories.
		                                        </p>
		                                    </div>
		                                </div>
		                                <div class="col-md-4">
		                                    <div class="facility-card">
		                                        <i class="bi bi-activity"></i>
		                                        <h5> Fitness</h5>
		                                        <p>
		                                            Gym and fitness equipment.
		                                        </p>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
    		</section>
    		<!--List Menu Ended Here-->
		</main>

		<!-- Footer Section Started Here-->
		<?php include"footer-section.php"?>
		<!-- Footer Section Started Here-->
	</body>
</html>