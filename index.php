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
		<div class="container-fluid m-0 p-0">
			 <!-- Slider Starts From Here -->
			<div id="mySlider" class="carousel slide" data-bs-ride="carousel">
			<!-- Carousel Indicators -->
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#mySlider" data-bs-slide-to="0" class="indicators active"></button>
				<button type="button" data-bs-target="#mySlider" data-bs-slide-to="1" class="indicators"></button>
				<button type="button" data-bs-target="#mySlider" data-bs-slide-to="2" class="indicators"></button>
				<button type="button" data-bs-target="#mySlider" data-bs-slide-to="3" class="indicators"></button>
			</div>

			<!-- Carousel Content / Slides -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="crousel-img/banner-img-2.jpg" alt="Banner 1" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="crousel-img/banner-img-4.jpg" alt="Banner 2" class="d-block w-100">          
				</div>
				<div class="carousel-item">
					<img src="crousel-img/banner-img-3.jpg" alt="Banner 3" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="crousel-img/banner-img-1.jpg" alt="Banner 3" class="d-block w-100">
				</div>        
			</div>

			<!-- Next & Previous Buttons / Icons -->
				<button class="carousel-control-prev" type="button" data-bs-target="#mySlider" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#mySlider" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>
			<!-- Slider Ends Here -->
		</div>

		<main class="container">
			<!--CHAMPION'S CHOICE Slider Started Here-->
			<div class="row mt-4 mb-4">
				<div class="col text-center">
					<p1><hr class="border-line"></p1>
					<h2 class="h2 main-heading">CHAMPION'S CHOICE</h2>
				</div>
			</div>	
			<div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
          		<div class="carousel-inner">
	            	<!-- Slide 1 -->
	            	<div class="carousel-item active">
	               		<div class="row">
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/SG-TRUSTED_BY_CHAMPIONS-HP-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">HARDIK PANDYA</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
	                  		<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/SG-TRUSTED_BY_CHAMPIONS-KL-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">KL RAHUL</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
			                    <div class="product-img">
			                       <img src="images/SG-TRUSTED_BY_CHAMPIONS-RP-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
			                    </div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">RISHABH PANT</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
			                    <div class="product-img">
			                       <img src="images/SG-TRUSTED_BY_CHAMPIONS-SM-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
			                    </div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">S. MANDHANA</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
		                  	</div>
	                	</div>
	            	</div>
	            	<!-- Slide 2 (Add more products here) -->
	            	<div class="carousel-item">
	                	<div class="row">
		                  	<!-- Repeat 4 more product cards here -->
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/SG-TRUSTED_BY_CHAMPIONS-HP-Final-Updated-Banner.webp" class="img-fluid cursor-focus w-100">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">HARDIK PANDYA</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
							<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/SG-TRUSTED_BY_CHAMPIONS-KL-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">KL RAHUL</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
	                  		<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
			                    <div class="product-img">
			                       <img src="images/SG-TRUSTED_BY_CHAMPIONS-RP-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
			                    </div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">RISHABH PANT</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
	                  		<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/SG-TRUSTED_BY_CHAMPIONS-SM-Final-Updated-Banner.webp" class="img-fluid cursor-focus">
		                    	</div>
	                      		<a href="#" style="text-decoration: none;">
	  								<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">S. MANDHANA</h3>
	  							</a>
	  							<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
	    							<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
	  							</p>
	                  		</div>
	                	</div>
	            	</div>
		            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
		            	<span class="carousel-control-prev-icon"></span>
		          	</button>
		          	<button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
		            	<span class="carousel-control-next-icon"></span>
		          	</button>
	        	</div>
   			</div>
			<!--CHAMPION'S CHOICE Slider Ends Here-->

			<!--OUR PRODUCTS Slider Started Here-->
			<div class="row mt-1 mb-4">
				<div class="col text-center">
					<p1><hr class="border-line"></p1>
					<h2 class="h2 main-heading">OUR PRODUCTS</h2>
				</div>
			</div>
			<div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
          		<div class="carousel-inner">
	            	<!-- Slide 1 -->
	            	<div class="carousel-item active">
	               		<div class="row">
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/bat-product-img.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">BATS</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
	                  		<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/ball-product-img.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">BALLS</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
			                    <div class="product-img">
			                       <img src="images/pads-product-img.webp" class="img-fluid cursor-focus">
			                    </div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">SOFT LEATHER</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
			                    <div class="product-img">
			                       <img src="images/stump-product-img.webp" class="img-fluid cursor-focus">
			                    </div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">ACCESSORIES</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
		                  	</div>
	                	</div>
	            	</div>
	            	<!-- Slide 2 (Add more products here) -->
	            	<div class="carousel-item">
	                	<div class="row">
		                  	<!-- Repeat 4 more product cards here -->
		                  	<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/bat-product-img.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">BATS</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
							<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/ball-product-img.webp" class="img-fluid cursor-focus">
		                    	</div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">BALLS</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
	                  		<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
			                    <div class="product-img">
			                       <img src="images/pads-product-img.webp" class="img-fluid cursor-focus">
			                    </div>
		                      	<a href="#" style="text-decoration: none;">
		  							<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">SOFT LEATHER</h3>
		  						</a>
		  						<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
		    						<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
		  						</p>
	                  		</div>
	                  		<div class="col-6 col-sm-4 col-md-3 mb-4 product-box">
		                    	<div class="product-img">
		                       		<img src="images/stump-product-img.webp" class="img-fluid cursor-focus">
		                    	</div>
	                      		<a href="#" style="text-decoration: none;">
	  								<h3 class="h3 text-center bg-light text-dark m-0 pt-4 product-title">ACCESSORIES</h3>
	  							</a>
	  							<p class="bg-light text-secondary text-center m-0 pt-0 pb-4 product-description">
	    							<a href="#">view all products <i class="ri-arrow-right-s-line"></i></a>
	  							</p>
	                  		</div>
	                	</div>
	            	</div>
		            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
		            	<span class="carousel-control-prev-icon"></span>
		          	</button>
		          	<button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
		            	<span class="carousel-control-next-icon"></span>
		          	</button>
	        	</div>
   			</div>
			<!--OUR PRODUCTS Slider Ends Here-->

			<!--BEST SELLERS Started Here-->
			<div class="container Product-shose bg-light p-4">
				<div class="row mt-1 mb-4">
					<div class="col text-center">
						<p1><hr class="border-line"></p1>
						<h2 class="h2 main-heading">BEST SELLERS</h2>
					</div>
				</div>
				<div class="row">
					<!-- Product Card 1 -->
			      	<div class="col-12 col-sm-6 col-md-4 mb-3 mt-2">
				        <div class="card product-card shadow">
				          	<img src="images/nike-shoes.webp" class="card-img-top" alt="Sneaker">
				          	<div class="card-body text-center">
				            	<h5 class="card-title">SG COSMOS Lifestyle Shoe</h5>
				            	<p class="card-text mb-2">
				              		<span class="price">₹2,449.00</span>
				              		<span class="old-price">₹3,499.00</span>
				              		<span class="offer">30% off</span>
				            	</p>
				            	<div >
	            					<button class="btn add-cart-btn btn-sm "><i class="ri-shopping-cart-fill">&nbsp;</i>Add to Cart</button>
	            					<button class="btn buy-now-btn btn-success btn-sm">Buy Now</button>
	          					</div>
				          	</div>
				        </div>
			      	</div>

			      	<!-- Product Card 2 -->
			      	<div class="col-12 col-sm-6 col-md-4 mb-3 mt-2">
			        	<div class="card product-card shadow">
			          		<img src="images/nike-shoes.webp" class="card-img-top" alt="Sneaker">
			          		<div class="card-body text-center">
			            		<h5 class="card-title">Urban Runner Sneaker</h5>
			            		<p class="card-text mb-2">
			              			<span class="price">₹3,199.00</span>
			              			<span class="old-price">₹4,599.00</span>
			              			<span class="offer">30% off</span>
			            		</p>
			            		<div >
	            					<button class="btn add-cart-btn btn-sm "><i class="ri-shopping-cart-fill">&nbsp;</i>Add to Cart</button>
	            					<button class="btn buy-now-btn btn-success btn-sm">Buy Now</button>
	          					</div>
			          		</div>
			        	</div>
			      	</div>

			      	<!-- Product Card 3 -->
			      	<div class="col-12 col-sm-6 col-md-4 mb-3 mt-2">
			        	<div class="card product-card shadow">
			          		<img src="images/nike-shoes.webp" class="card-img-top" alt="Sneaker">
			          		<div class="card-body text-center">
			            		<h5 class="card-title">Urban Runner Sneaker</h5>
			            		<p class="card-text mb-2">
			              			<span class="price">₹3,199.00</span>
			              			<span class="old-price">₹4,599.00</span>
			              			<span class="offer">30% off</span>
			            		</p>
			            		<div >
	            					<button class="btn add-cart-btn btn-sm "><i class="ri-shopping-cart-fill">&nbsp;</i>Add to Cart</button>
	            					<button class="btn buy-now-btn btn-success btn-sm">Buy Now</button>
	          					</div>
			          		</div>
			        	</div>
			      	</div>

			      	<!-- Product Card 4 -->
			      	<div class="col-12 col-sm-6 col-md-4 mb-3 mt-2">
				        <div class="card product-card shadow">
				          	<img src="images/nike-shoes.webp" class="card-img-top" alt="Sneaker">
				          	<div class="card-body text-center">
				            	<h5 class="card-title">SG COSMOS Lifestyle Shoe</h5>
				            	<p class="card-text mb-2">
				              		<span class="price">₹2,449.00</span>
				              		<span class="old-price">₹3,499.00</span>
				              		<span class="offer">30% off</span>
				            	</p>
				            	<div >
	            					<button class="btn add-cart-btn btn-sm "><i class="ri-shopping-cart-fill">&nbsp;</i>Add to Cart</button>
	            					<button class="btn buy-now-btn btn-success btn-sm">Buy Now</button>
	          					</div>
				          	</div>
				        </div>
			      	</div>

			      	<!-- Product Card 5 -->
			      	<div class="col-12 col-sm-6 col-md-4 mb-3 mt-2">
			        	<div class="card product-card shadow">
			          		<img src="images/nike-shoes.webp" class="card-img-top" alt="Sneaker">
			          		<div class="card-body text-center">
			            		<h5 class="card-title">Urban Runner Sneaker</h5>
			            		<p class="card-text mb-2">
			              			<span class="price">₹3,199.00</span>
			              			<span class="old-price">₹4,599.00</span>
			              			<span class="offer">30% off</span>
			            		</p>
			            		<div >
	            					<button class="btn add-cart-btn btn-sm "><i class="ri-shopping-cart-fill">&nbsp;</i>Add to Cart</button>
	            					<button class="btn buy-now-btn btn-success btn-sm">Buy Now</button>
	          					</div>
			          		</div>
			        	</div>
			      	</div>

			      	<!-- Product Card 6 -->
			      	<div class="col-12 col-sm-6 col-md-4 mb-3 mt-2">
			        	<div class="card product-card shadow-lg h-100">
			          		<img src="images/nike-shoes.webp" class="card-img-top" alt="Sneaker">
			         		 <div class="card-body text-center">
			            		<h5 class="card-title">Street Style Sneaker</h5>
			            		<p class="card-text mb-2">
			             			<span class="price">₹2,999.00</span>
			              			<span class="old-price">₹4,299.00</span>
			              			<span class="offer">25% off</span>
			            		</p>
			           		 	<div >
	            					<button class="btn add-cart-btn btn-sm "><i class="ri-shopping-cart-fill">&nbsp;</i>Add to Cart</button>
	            					<button class="btn buy-now-btn btn-success btn-sm">Buy Now</button>
	          					</div>
			          		</div>
			        	</div>
			      	</div>
			      	<div class="text-center mb-3">
			    		<a href="#" class="text-secondary product-view text-center ">View all<i class="ri-arrow-right-s-line product-view"></i></a>
			    	</div>
			    </div>
			</div>
			<!--BEST SELLERS Ends Here-->

			<!-- SPORTS WEAR Started Here -->
			<div class="row mt-5 mb-3">
				<!-- Card 1 -->
				<div class="col-12 col-md-6 mb-3">
					<div class="card card-explore">
						<div class="card-body text-center">
							<img src="images/sports-wear.webp" alt="sports-wear" class="img-fluid w-100 mb-3">
							<h4 class="product-explore">SPORTS WEAR</h4>
							<a href="#" class="text-secondary product-view text-end">
							explore now <i class="ri-arrow-right-s-line"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Card 2 -->
				<div class="col-12 col-md-6 mb-3">
					<div class="card card-explore">
						<div class="card-body text-center">
							<img src="images/sports-wear.webp" alt="sports-wear" class="img-fluid w-100 mb-3">
							<h4 class="product-explore">SPORTS WEAR</h4>
							<a href="#" class="text-secondary product-view text-end">
							explore now <i class="ri-arrow-right-s-line"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- SPORTS WEAR Ends Here -->

			<!-- Join Club Ends Here -->
			<div class="row">
				<div class="col text-center mb-3">
					<p1><hr class="border-line"></p1>
					<h2 class="h2 main-heading">JOIN THE CG CLUB</h2>
					<p class="text-secondary">Get exclusive discount updates</p>
				</div>
			</div>
			<div class="row mb-0">
				<div class="col text-center  mb-3">
					<a href="#" class="main-heading join-us m-0">JOIN US NOW <i class="ri-arrow-right-s-line"></i></a>
				</div>
			</div>
			<!-- Join Club Ends Here -->
		</main>

		<!-- Footer Section Started Here-->
		<?php include"nav-footer.php"?>
		<!-- Footer Section Started Here-->
	</body>
</html>
