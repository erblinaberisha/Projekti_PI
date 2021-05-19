<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<link rel="stylesheet" href="bootstrap.min.css">
	<!-- Start header -->
	<?php
	if(!file_exists('assets/headernav.php') || !file_exists('assets/footer.php')){
		exit('The file was not included correctly in this website. Maybe that file does not exist.');
	}
	include('assets/headernav.php');
	?>
	<!-- End header -->
	
	<!-- Start Desserts -->
	<div class="all-page-title page-breadcrumb-menu">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Desserts</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End Desserts -->
	
	<!-- Start Menu -->
	<div class="desserts-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
                        <h2>
							<br>
                        <p>
                         </p>
                         </h2>
					</div>
				</div>
			</div>
		    <div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Desserts</a>
					</div>
				</div>
			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="row">
							<div class="col-lg-4 col-md-6 special-grid desserts">
								<div class="gallery-single fix">
									<img src="mango.jpg" class="img-fluid" alt="Image">
                                <div class="why-text">
                                <h4>Mango Cheesecake</h4>
                                <p>Mango and Passion fruit sauce</p>
                            <h5> $6</h5>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="banoffeecheesecake.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Banoffee cheesecake</h4>
                            <p>To share</p>
                            <h5> $26</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="vegan-cheesecake.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Vegan Cheesecake</h4>
                            <p>With raspberry topping</p>
                            <h5> $8</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="Chocolate.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Chocolate Cheesecake</h4>
                            <p></p>
                            <h5> $8</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="lampone.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Lampone Pavlova</h4>
                            <p>With cream and fresh raspberries</p>
                            <h5> $5.6</h5>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="crepes.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Crêpes</h4>
                            <p>With Nutella and fresh fruit</p>
                            <h5> $5</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="pancakes.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Pancakes</h4>
                            <p>With syrup and fresh berries</p>
                            <h5> $5</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="waffle.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Pumpkin Spice Waffles</h4>
                            <p>With  maple syrup and some pecans</p>
                            <h5> $5</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="coffee-creme-brulee.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Coffee Crème Brûlée</h4>
                            <p>With dark-roast coffee beans</p>
                            <h5> $7</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="tart.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Chocolate tart</h4>
                            <p></p>
                            <h5> $6.5</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="chocolatefondant.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Chocolate Fondant </h4>
                            <p>with créme fraiche ice cream </p>
                            <h5> $10</h5>		
						</div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="EspresspChocolateTruffles.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Chocolate Truffles</h4>
                            <p>With espresso </p>
                            <h5> $2 a piece</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="petit-fours.jpg" class="img-fluid" alt="Image" >
                        <div class="why-text">
                            <h4>Petit Fours</h4>
                            <p> Gift Box</p>
                            <h5> $20</h5>
                        </div>
                    </div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="lemonmad.jpg" class="img-fluid" alt="Image" >
                        <div class="why-text">
                            <h4>Lemon Madeleines</h4>
                            <p>3 handmade Madeleines</p>
                            <h5> $5</h5>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-6 special-grid desserts">
                    <div class="gallery-single fix">
                        <img src="banoffeecheesecake.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Banoffee cheesecake</h4>
                            <p>To share with love.</p>
                            <h5> $5.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>			
</div>	
</div>
</div>			
	<!-- End Menu -->
	
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
									<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Blerina Luma</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">“Breakfast will knock your slippers off.” I had breakfast there this morning and dinner tonight. All were well beyond my expectations. Everything is so fresh. Best clam chowder I have ever had. Clams and linguine were out
                                    of this world. Breakfast will knock your slippers off.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Tringe Dema</strong></h5>
								<h6 class="text-dark m-0">Happy Customer</h6>
								<p class="m-0 pt-3">"The Food is Excellent.” The food is excellent, generous portions and great prices. The service was fast and friendly. I highly recommended it if you’re in Prishtina.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="quotations-button.png" alt="">
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
