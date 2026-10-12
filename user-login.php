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

		<div class="login-body">
			<div class="container-fluid login-container mt-5 mb-5">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 login-box">
								<img class="img-fluid login-img rounded" src="images/login-img.jpg" alt="Login Image" width="100%" height="50%">
							</div>
							<div class="col-md-6 login-box">
								<h1 class="heading text-center">Login</h1>
								<form action="" method="post">
									<div class="mb-3">
										<label for="username" class="form-label">Username</label>
										<input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
									</div>
									<div class="mb-3">
										<label for="password" class="form-label">Password</label>
										<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
									</div>
									<button type="submit" name="login" class="btn add-cart-btn w-100">Login</button>
								</form>
								<p class="end-line text-center mt-3">Don't have an account? <a href="#">Sign up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Footer Section Started Here-->
		<?php include"footer-section.php"?>
		<!-- Footer Section Started Here-->
	</body>
</html>