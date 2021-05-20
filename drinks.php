<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <link rel="stylesheet" href="css/drinksbootstrap.min.css">
	<!-- Start header -->
	<?php
	if(!file_exists('assets/headernav.php') || !file_exists('assets/footer.php')){
		exit('The file was not included correctly in this website. Maybe that file does not exist.');
	}
	include('assets/headernav.php');
	?>
	<!-- End header -->
	<!-- Start Drinks -->
	<div class="all-page-title page-breadcrumb-menu" data-aos="fade-down"
	data-aos-duration="1200">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1 >Drinks</h1>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<!-- End Drinks -->
	<!-- Start Menu -->
	<div class="drinks-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>
							<p style="font-family:georgia,garamond,serif;font-size:35px;font-style:italic;">
								Soft drinks
							</p>
						</h2>
					</div>
				</div>
			</div>

			<div class="row inner-menu-box">


				<!--div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"-->

				<div class="row">

					<div class="col-lg-4 col-md-6 special-grid drinks" style="vertical-align:middle; margin-left: -185px">
						<div class="gallery-single fix">
							<img src="images/drink1.jpg" class="img-fluid" alt="Image" ;>
							<div class="why-text">
								<h4>Cola's</h4>
								<p>Coke, Coke Light and Zero</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink2.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Other Soft Drinks</h4>
								<p>Fanta, Lemonade, Tonic and Soda</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink3.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Fruit Juice</h4>
								<p>Cranberry, Strawberry, Apple, Pomegranate, Orange</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink4.jpg" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Mineral Water</h4>
								<p>Still or Sparkling</p>
								<h5> 1.00&euro;</h5>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="heading-title text-center">
				<h2>
					<p style="font-family:georgia,garamond,serif;font-size:35px;font-style:italic;">
						Beers and Ciders
					</p>
				</h2>
			</div>

			<div class="row inner-menu-box">

				<div class="row">

					<div class="col-lg-4 col-md-6 special-grid drinks" style="vertical-align:middle; margin-left: 180px">
						<div class="gallery-single fix">
							<img src="images/drink5.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Beers</h4>
								<p>Castle, Black Label, Amstel, Windhoek Light and Windhoek Lager</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks" style="padding: 30px">
						<div class="gallery-single fix">
							<img src="images/drink6.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Ciders</h4>
								<p>Savannah</p>
								<h5> 1.00&euro;</h5>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="heading-title text-center">
				<h2>
					<p style="font-family:georgia,garamond,serif;font-size:35px;font-style:italic;">
						Spirits
					</p>
				</h2>
			</div>

			<div class="row inner-menu-box">
				<div class="row">

					<div class="col-lg-4 col-md-6 special-grid drinks" style="vertical-align:middle; margin-left: -185px">
						<div class="gallery-single fix">
							<img src="images/drink7.JPG" class="img-fluid" alt="Image" ;>
							<div class="why-text">
								<h4>Whiskey</h4>
								<p>J&amp;B and Bells</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink8.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Brandy</h4>
								<p>Klipdrift and Wellington</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink9.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>White spirits</h4>
								<p>Gin and Vodka</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink10.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Rum</h4>
								<p>Southern Comfort, Campari</p>
								<h5> 1.00&euro;</h5>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="heading-title text-center">
				<h2>
					<p style="font-family:georgia,garamond,serif;font-size:35px;font-style:italic;">
						Wines
					</p>
				</h2>
			</div>

			<div class="row inner-menu-box">
				<div class="row">

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink11.JPG" class="img-fluid" alt="Image" ;>
							<div class="why-text">
								<h4>White Wine</h4>
								<p>
									Jade Mountain White Blend, Dr Loosen Reisling, O'Reilly Pinot Gris
								</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink12.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Red Wine</h4>
								<p>
									Alexander Valley Vineyard, Rosemblum Zinfandel, Picket Fence
								</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 special-grid drinks">
						<div class="gallery-single fix">
							<img src="images/drink13.JPG" class="img-fluid" alt="Image">
							<div class="why-text">
								<h4>Rose Wine</h4>
								<p>
									Mimosa, Bloody Mary, Philips Head
								</p>
								<h5> 1.50&euro;</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- End Menu -->
	<br>
	<br>
	<br>
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>We serve passion</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Blerina Luma</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">“Breakfast will knock your slippers off.” I had breakfast there this morning and dinner tonight. All were well beyond my expectations. Everything is so fresh. Best clam chowder I have ever had. Clams and linguine were out
                                    of this world. Breakfast will knock your slippers off.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Tringe Dema</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">"The Food is Excellent.” The food is excellent, generous portions and great prices. The service was fast and friendly. I highly recommended it if you’re in Prishtina.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ard Nika</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">“The Food is Always Delicious!” We like to go to Food House every time we come to Prishtina. The food is always delicious! This is the first year we could make reservations (probably due to spacing because of the virus).
                                    Our waitress, Casey, was great!</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	<!--<p>
		latitude:<span id="latitude"></span>&deg;<br>
		longitude:<span id="longitude"></span>&deg;
	</p>-->
	<!-- Start Contact info -->

	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<?php include('assets/footer.php');?>
	<!-- End Footer -->

</body>
</html>
