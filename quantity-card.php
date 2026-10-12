<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Quantity Card</title>
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

		<!--Breadcrumb-section Started Here-->
  		<section class="breadcrumb-section">
			<div class="container">
				<a href="index.php">Home</a>
				<i class="bi bi-chevron-right px-0 mx-0"></i>
				<span>Quantity Card</span>
			</div>
		</section>
		<!--Breadcrumb-section Ended Here-->

		<div class="bg-light text-dark text-center py-4">
      		<h1>🛒 Your Cart</h1>
      		<p>Review your selected bats</p>
    	</div>
    	<!-- Cart Table -->
  		<div class="container my-5">
    		<div class="table-responsive">
      			<table class="table table-bordered align-middle text-center shadow">
			        <thead class="table-dark">
			          	<tr>
			            	<th>Product</th>
			            	<th>Price</th>
			            	<th>Quantity</th>
			            	<th>Total</th>
			            	<th>Remove</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>SG Kashmir Willow</td>
			            	<td>₹2,499</td>
			            	<td>
			              		<input type="number" value="1" min="1" class="form-control w-50 mx-auto">
			            	</td>
			            	<td>₹2,499</td>
			            	<td><button class="btn btn-danger btn-sm">❌</button></td>
			          	</tr>
			          	<tr>
			            	<td>MRF Genius Bat</td>
			            	<td>₹4,999</td>
			            	<td>
			              		<input type="number" value="2" min="1" class="form-control w-50 mx-auto">
			            	</td>
			            	<td>₹9,998</td>
			            	<td><button class="btn btn-danger btn-sm">❌</button></td>
			          	</tr>
			        </tbody>
      			</table>
    		</div>
		    <!-- Cart Summary -->
		    <div class="text-end mt-4">
		      	<h4 class="text-dark">Subtotal: <span class="text-success">₹12,497</span></h4>
		      	<button class="btn add-cart-btn btn-lg mt-3">Proceed to Checkout</button>
		    </div>
	  	</div>
	  	<!-- Footer Section Started Here-->
		<?php include"footer-section.php"?>
		<!-- Footer Section Started Here-->
	</body>
</html>