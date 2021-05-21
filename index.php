<?php include 'controllers/authenticationController.php';


class user{
private $user; 

function __construct($user) {
    $this->user = $user;
  }
  function get_user() {
    return $this->user;
  }

// alert popping function  
protected  function function_alert($message) {
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
function __destruct() {
	echo " ";
 }
}

class logedinUser extends user {
	public function displayAlert($message){
		$this->function_alert($message); 
	}

}


// verify user with token 
if(isset($_GET['token'])){
	$token=$_GET['token']; 
	verifyUser($token); 
}
if( $_SESSION['verified'] ==0) {
	$name=$_SESSION['username']; 
	$username=new logedinUser($name); 
	$getName=$username->get_user(); 

	$username->displayAlert("Hi, $getName. Check your email if you want to verify your account now!"); 
}


   // verify user with token 
if(isset($_GET['password-token'])){
	$passwordToken=$_GET['password-token']; 
	resetPassword($passwordToken); 
}

// redirect user to login page if they're not logged in
if (empty($_SESSION['id'])) {
    header('location: login.php');
	exit();
}

?>
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
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Food House Restaurant</strong></h1>
							<p class="m-b-40">A cozy, nostalgic restaurant and wine bar in the heart of the Kosovo</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Food House Restaurant</strong></h1>
							<p class="m-b-40">"Nothing brings people together like good food" <br>"Laughter is brightest where food is best"</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Food House Restaurant</strong></h1>
							<p class="m-b-40">GOOD FOOD <br> IS <br> GOOD MOOD</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
     <div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div style="background-color:rgb(255, 255, 255);border-style:solid;border-color:rgb(255, 255, 255)">
	<svg viewbox="0 0 2000 300">
		<symbol id="s-text">
			<text text-anchor="middle" x="50%" y="80%">Food House Restaurant</text>
		</symbol>
	
		<g>
			<use href="#s-text" class="text-copy"></use>
			<use href="#s-text" class="text-copy"></use>
			<use href="#s-text" class="text-copy"></use>
			<use href="#s-text" class="text-copy"></use>
			<use href="#s-text" class="text-copy"></use>
		</g>
	</svg>
</div>
	<div class="about-section-box" data-aos="fade-up"
	data-aos-duration="3000">
         <div class="container">
		    <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<br>
						<h1>Welcome To <span>Food House Restaurant</span></h1>
						<h4 class="gradient"><strong> Little Story </strong></h4>
						<p>At our Food House Restaurant we are in love with high quality food and drink. We care about the people who produce the food, and the places it comes from. We have dedicated our lives to promoting a real understanding of high-quality
						food and drink. We know that by ensuring we create and offer the best quality products, we improve the lives of our family and yours. We've enjoyed over our years of business in Prishtina, We are taking the traditions and recipes
						from our home and bringing the "family Food style House" to our restaurant. We know that Food tastes better when you eat with your family, and we consider all of our staff and customers famigilia."Feel like home" </p>
						<p class=" gradient"><strong>We hope to welcome you soon.</strong></p>
						<a class=" btn btn-lg btn-circle btn-outline-new-white" href="about.php">Our Story</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				    <img src="images/about-img.jpg" alt="" class="img-fluid imgfluid">
		        </div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
		<!-- Start QT -->
		<div class="qt-box qt-background" data-aos="fade-down"
		data-aos-easing="linear"
		data-aos-duration="1500">
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
	
		<!-- Start Menu -->
		<div class="about-section-box" data-aos="fade-right"
		data-aos-offset="300"
		data-aos-easing="ease-in-sine">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 text-center">
						<div class="inner-column">
							<br>
							<br>
							<h1> Special Menu</h1>
							<p> Our kitchen is rooted in an appreciation for exceptional homegrown ingredients, thoughtful-yet-simple preparations, and a passion for breathing new life into Old World recipes. Desserts borrow from treasured family recipes extending
								back four generations. In addition to the menus listed here, we offer a selection of daily specials.</p>
							<a class="btn btn-lg btn-circle btn-outline-new-white" href="food.php">Menu</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<img src="images/menu.jpg" alt="" class="img-fluid imgfluid">
					</div>
				</div>
			</div>
		</div>
		<!-- End Menu -->

		<!-- Start Gallery -->
		<div class="about-section-box" data-aos="flip-left"
		data-aos-easing="ease-out-cubic"
		data-aos-duration="2000">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<img src="images/gallery-img-02.jpg" alt="" class="img-fluid imgfluid">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 text-center">
						<div class="inner-column1">
							<br>
							<br>
							<h1>Gallery</h1>
							<p> Food House Restaurant is founded in a passion for exceptional food, drink, service, and hospitality with heart. </p>
							<a class="btn btn-lg btn-circle btn-outline-new-white" href="gallery.php">Gallery</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Gallery -->
	
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
	<?php
	include('assets/footer.php');
	?>
	<!-- End Footer -->
	
	
    <script>
		if('geolocation'in navigator){
		   console.log('geolocation available');
		   navigator.geolocation.getCurrentPosition(position => {
		//	const lat=position.coords.latitude;
		//   const lon=position.coords.longitude;
		//   document.getElementById('latitude').textContent=lat;
		//  document.getElementById('longitude').textContent=lon;
		   console.log(position);
		});
		}else{
           console.log('geolocation isnt available');
		}
	</script>
	
</body>
</html>
