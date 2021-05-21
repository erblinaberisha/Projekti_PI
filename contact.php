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
	<?php include('validate-contact.php'); ?>
	<hr>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<?php
							$string = 'A few of resturant serve good food, but they don\'t have excelent service';
							$patterns  = array();
							$patterns[0] = '/few/';
							$patterns[1] = '/excelent/';
							$replace = array();
							$replace[1] = 'lot';
							$replace[0] = 'good';
							echo preg_replace($patterns, $replace, $string);
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="form_name">Name:</label>
									<input type="text" class="form-control" id="form_name" name="name" placeholder="Your Name" value="<?php echo $name ?>">
									<span class="errorsa" style="color: red;"><?php echo $name_error ?></span>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="form_email">Email:</label>
									<input type="text" placeholder="Your Email" id="form_email" class="form-control" name="email" value="<?php echo $email?>">
									<span class="errorsa" style="color: red;"><?php echo $email_error ?></span>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" name="guest">
									  <option disabled selected>What are you getting in touch about?</option>
									  <option value="General Inquiry">General Inquiry</option>
									  <option value="Press Inquiry">Press Inquiry</option>
									</select>
									<span class="errorsa" style="color: red;"><?php echo $guest_error ?></span>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea type="text" name="message" class="form-control" id="message" placeholder="Your Message" rows="4" value="<?php echo $message ?>"></textarea>
									<span class="errorsa" style="color: red;"><?php echo $message_error ?></span>
								</div>
								<div class="submit-button text-center">
									<button type="submit" name="submit" value="Send an email">Send Message</button>
									<div style="color: green; text-align: center; font-weight: bold; font-size:14px;"><?php echo $success ?></div>
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
	<?php 
	  	$present_time = date("H:i:s-m/d/y");
		$expiry = 60*24*60*60+time();
		setcookie("Lastvisit",$present_time,$expiry);
		if(isset($_COOKIE["Lastvisit"])) {
			echo "<p>Cookie has been set</br>";
			echo "The present time of the system is: ";
			echo $present_time;
			echo "</br>Last visited time and date is: ";
			echo $_COOKIE["Lastvisit"];
			echo "</p>";			
		ob_end_flush();
		} else {
			echo "You've got some old cookies.";
		}
	  ?> 
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
<script src="js/colors.js"></script>

</body>
</html>
