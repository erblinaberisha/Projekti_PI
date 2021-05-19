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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb-contact">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<hr>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>A lot of resturant serve good food, but they don't have very good service</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="form_name">Name:</label>
									<input type="name" class="form-control" id="form_name" name="name" pattern="^[A-Za-z]+$" placeholder="Your Name" required="required" data-error="Invalid name is required.Please input alphabet characters only">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="form_email">Email:</label>
									<input type="email" placeholder="Your Email" id="form_email" class="form-control" name="email" required="required" data-error="Invalid email is required.">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" required data-error="Please Select Your Inquiry">
									  <option disabled selected>What are you getting in touch about?</option>
									  <option value="General Inquiry">General Inquiry</option>
									  <option value="Press Inquiry">Press Inquiry</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit1" type="submit">Send Message</button>
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
	<hr>
	  <hr>
	  <hr>
	<!--<script>
		  
let contacts = [];
// example {id:1592304983049, title: 'Deadpool', year: 2015}
const addcontact = (ev)=>{
    ev.preventDefault();  //to stop the form submitting
    let contact = {
        id: Date.now(),
        name: document.getElementById('form_name').value,
        email: document.getElementById('form_email').value,
        inquiry: document.getElementById('guest').value,
        message: document.getElementById('message').value,
    }
    contacts.push(contact);
    document.forms[0].reset(); // to clear the form for the next entries
    //document.querySelector('form').reset();

    //for display purposes only
    //console.warn('added' , {reservation} );
    //let pre = document.querySelector('#msg pre');
    //pre.textContent = '\n' + JSON.stringify(reservations, '\t', 2);

    //saving to sessionStorage
    sessionStorage.setItem('MyContactList', JSON.stringify(contacts) );
}
document.addEventListener('DOMContentLoaded', ()=>{
    document.getElementById('submit1').addEventListener('click', addcontact);
});
	  </script>-->
	<!-- End Contact -->
	
	<!-- Start Contact info -->
	
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<?php include('assets/footer.php');?>
<!-- End Footer -->
<script src="colors.js"></script>

</body>
</html>
