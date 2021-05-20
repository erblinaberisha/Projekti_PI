<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Start header -->
	<?php
	if(!file_exists('assets/headernav.php') || !file_exists('assets/footer.php')){
		exit('The file was not included correctly in this website. Maybe that file does not exist.');
	}
	include('assets/headernav.php');
	?>
	<!-- End header -->
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb-about" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Our Story</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box" data-aos="flip-left"
	data-aos-easing="ease-out-cubic"
	data-aos-duration="2000">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Food House Restaurant</span></h1>
						<h4>Our Story</h4>
						<p>At our Food House Restaurant we are in love with high quality food and drink. We care about the people who produce the food, and the places it comes from. We have dedicated our lives to promoting a real understanding of high-quality
                            food and drink. We know that by ensuring we create and offer the best quality products, we improve the lives of our family and yours. We've enjoyed over our years of business in Prishtina, We are taking the traditions and recipes
                            from our home and bringing the "family Food style House" to our restaurant. We know that Food tastes better when you eat with your family, and we consider all of our staff and customers famigilia."Feel like home" </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.html">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
			<!--	<div class="col-md-12">
					<div class="inner-pt">-->
						<article class="mult_col">
							<p>“Best Place"</p>
							<p>Our menu spotlights a seasonal selection of salads, vegetables, and homemade cake.</p>
							<p>Wine is paramount to the Food House experience, with a 550+ bottle-deep list, and upwards of 20 by-the-glass selections gracing the menu at all times. A parade of spirit-forward, expertly-crafted cocktails improve upon the watering
								holes of days gone by, as do an edited collection of tap and bottled beer.</p>
							<p>-Customer reviews- <br> <br>“Loved this Place” <br> We decided to check this place out this past weekend because it was near our hotel and had good reviews on this website. I loved it! It was 7:30 on a Saturday night, but we only had
								to wait a couple of minutes. The staff was friendly and attentive, and our waitress, Heidi, was a lot of fun to banter with. I started with the apple cinna-martini (I altered their recipe a little and asked for vodka instead of
								rum), and it was sooo good!</p>
							<p>And then the bread….. so warm that it was almost too hot to the touch – the butter just melted on it. My husband had the clam chowder which was delicious! He also had the eggplant parm which was just okay. But I had the scallop pizza
								with bacon, garlic, and spinach and it was fabulous! So the food, the staff, and the atmosphere was all very nice.</p>
							<p>I only wish I lived closer to this place so I could go again.</p>
						  </article>
			<!--	</div>
				</div>-->
			</div>
		</div>
	</div>
	<!-- End About -->
	<hr>
	<h3 class="animation">The best tasting experience, is in our "FOOD HOUSE" RESTAURANT</h3>
	<hr>
		<!-- Start Contact info -->
		
		<!-- End Contact info -->
	
	<!-- Start Footer -->
	<?php include('assets/footer.php');?>
	<!-- End Footer -->
	
</body>
</html>
