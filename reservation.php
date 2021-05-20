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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb-reservation">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reserve</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reservation</h2>
						<p>My favorite thing to make for dinner is reservation.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="reservationForm">
							<div class="row">
								<div class="col-md-6">
									<h3>Book a table</h3>
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_date">Date</label>
											<input id="form_date" class="picker__input form-control" name="date" type="date" placeholder="dd/mm/yyyy" required="required" data-error="Please select date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_time">Time </label>
											<input id="form_time" class="form-control picker__input" name="time" type="time" placeholder="--:--" required ="required" data-error="Please select time">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>Number of People</option>
											  <option value="1 person">1 person</option>
											  <option value="2 people">2 people</option>
											  <option value="3 people">3 people</option>
											  <option value="4 people">4 people</option>
											  <option value="5 people">5 people</option>
											  <option value="6 people">6 people</option>
											  <option value="7 people">7 people</option>
											  <option value="8+ people">8+ people</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Contact Details</h3>
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_name">Name </label>
											<input type="name" class="form-control" id="form_name" name="name" pattern= "^[A-Za-z]+$" placeholder="Your Name" required="required" data-error="Invalid name is required.Please input alphabet characters only">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="form_email">Email </label>
											<input type="email" placeholder="Your Email" id="form_email" class="form-control" name="email" required="required" data-error="Invalid email is required.">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="myform_phone">Phone:</label>
											<input type="tel" placeholder="Your Number" id="myform_phone" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" name="phone" required="required" data-error="Invalid phone number is required.Enter phone number in this format: 123-456-789" >
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit1" type="submit">Book Table</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
				
		</div>
	</div>
	<!--<script>
	let reservations = [];
	// example {id:1592304983049, title: 'Deadpool', year: 2015}
	const addreservation = (ev)=>{
		ev.preventDefault();  //to stop the form submitting
		let reservation = {
			id: Date.now(),
			name: document.getElementById('form_name').value,
			date: document.getElementById('form_date').value,
			time: document.getElementById('form_time').value,
			person: document.getElementById('person').value,
			email: document.getElementById('form_email').value,
			number: document.getElementById('myform_phone').value
		}
		reservations.push(reservation);
		document.forms[0].reset(); // to clear the form for the next entries
		//document.querySelector('form').reset();
	
		//for display purposes only
		//console.warn('added' , {movies} );
		//let pre = document.querySelector('#msg pre');
		//pre.textContent = '\n' + JSON.stringify(movies, '\t', 2);
	
		//saving to localStorage
		localStorage.setItem('MyReservationList', JSON.stringify(reservations) );
	}
	document.addEventListener('DOMContentLoaded', ()=>{
		document.getElementById('submit1').addEventListener('click', addreservation);
	});
	</script>-->
	<!-- End Reservation -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Costumer Reviews</h2>
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
								<h6 class="text-dark m-0">Happy Costumer</h6>
								<p class="m-0 pt-3">“Breakfast will knock your slippers off.” I had breakfast there this morning and dinner tonight. All were well beyond my expectations. Everything is so fresh. Best clam chowder I have ever had. Clams and linguine were out
                                    of this world. Breakfast will knock your slippers off.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Tringe Dema</strong></h5>
								<h6 class="text-dark m-0">Our Costumer</h6>
								<p class="m-0 pt-3">"The Food is Excellent.” The food is excellent, generous portions and great prices. The service was fast and friendly. I highly recommended it if you’re in Prishtina.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ard Nika</strong></h5>
								<h6 class="text-dark m-0">Our Costumer</h6>
								<p class="m-0 pt-3"> “The Food is Always Delicious!” We like to go to Food House every time we come to Prishtina. The food is always delicious! This is the first year we could make reservations (probably due to spacing because of the virus).
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
	
	<!-- Start Contact info -->
	
	<!-- End Contact info -->
	
<!-- Start Footer -->
    <?php include('assets/footer.php');?>
<!-- End Footer -->
<script src="js/colors.js"></script>
</body>
</html>
