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

		<main class="container-fluid m-0 p-0">
	  		<!--Breadcrumb-section Started Here-->
	  		<section class="breadcrumb-section">
				<div class="container">
					<a href="index.php">Home</a>
					<i class="bi bi-chevron-right px-0 mx-0"></i>
					<span>Enquiry</span>
				</div>
			</section>
			<!--Breadcrumb-section Ended Here-->

			<!--List Menu Started Here-->
			<section class="main-section">
		    	<div class="container">
		        	<div class="row">
		            	<!-- ================= LEFT SIDEBAR ================= -->
		            	
		            	<?php
		            		include 'left-list-menu.php';
		            	?>

		                <!-- ================= RIGHT CONTENT ================= -->
		                <div class="col-lg-9">
		                    <div class="about-content">
                        		<!-- Heading -->
                        		<div class="page-heading">
                            		<h1>CONTACT US</h1>
                            		<div class="heading-line"></div>
                        		</div>
		                        <!-- Intro -->
		                        <p class="">
		                            If you would like more information about what Bhalla International can do for you, continue to use this website, and feel free to mail us or call us. We look forward to serving you.
		                        </p>
                        		<div class="row">
                            		<div class="col">
                                		<h5 class="mb-3">FEEL FREE TO MAKE A ENQUIRY</h5>
                                		<form action="#" method="POST">
		                                    <div class="row g-3 mb-3">
		                                        <div class="col-md-6">
		                                            <input type="text" class="form-control" placeholder="Subject *" required>
		                                        </div>
		                                        <div class="col-md-6">
		                                            <input type="text" class="form-control" placeholder="Name *" required>
		                                        </div>
		                                    </div>
		                                    <div class="row g-3 mb-3">
		                                        <div class="col-md-6">
		                                            <input type="text" class="form-control" placeholder="Company Name">
		                                        </div>
		                                        <div class="col-md-6">
		                                            <input type="text" class="form-control" placeholder="Company Website">
		                                        </div>
		                                    </div>
		                                    <div class="row g-3 mb-3">
		                                        <div class="col-md-6">
		                                            <input type="email" class="form-control" placeholder="E-mail ID *" required>
		                                        </div>
		                                        <div class="col-md-6">
		                                            <input type="tel" class="form-control" placeholder="Phone No. *" required>
		                                        </div>
		                                    </div>
		                                    <div class="row g-3 mb-3">
		                                        <div class="col-md-6">
		                                            <input type="text" class="form-control" placeholder="Fax No.">
		                                        </div>
		                                        <div class="col-md-6">
		                                            <select class="form-select">
		                                                <option selected>India</option>
		                                                <option value="1">USA</option>
		                                                <option value="2">UK</option>
		                                                <option value="3">Australia</option>
		                                            </select>
		                                        </div>
		                                    </div>
		                                    <div class="mb-3">
		                                        <textarea class="form-control" rows="3" placeholder="Address *"></textarea>
		                                    </div>
		                                    <div class="mb-3">
		                                        <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
		                                    </div>
		                                    <!-- Buttons -->
		                                    <div class="d-flex gap-2">
		                                        <button type="submit" class="btn btn-submit add-cart-btn">
		                                            SUBMIT
		                                        </button>
		                                        <button type="reset" class="btn btn-reset btn-secondary">
		                                             RESET
		                                        </button>
		                                    </div>
                                		</form>
                            		</div>
                            		<div class="col-lg-4 mt-4 mb-4">
                                		<div class="info-box info-box-blue">
                                			<h5>Address</h5>
                                    		<div>
		                                        <p class="text-dark mt-2">
	                                    			<i class="ri-map-pin-fill text-light"></i>
		                                            A1/1 Udyogpuram Industrial Estate Partapur, Delhi Road,
		                                            Meerut-250103<br>
		                                            U.P. - India
		                                        </p>
                                    		</div>
                                    	</div>
		                                <div class="info-box info-box-orange">
		                                	<h5>Contact</h5>
		                                    <div>
		                                        <p class="text-dark">
		                                    		<i class="ri-phone-fill text-light "></i>
		                                            +91-121-2441111<br>
		                                            <i class="ri-smartphone-line text-light"></i>
		                                            +91-9411455285
		                                        </p>
		                                    </div>
		                                </div>
	                                	
	                                
		                                <div class="info-box info-box-green">
		                                	<h5>Mail</h5>
		                                    <div>
		                                        <p class="text-dark">
		                                    	<i class="ri-mail-fill text-light"></i>
		                                        sales@cg.com.in</p>
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