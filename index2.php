<?php include 'controllers/authenticationController.php';

// alert popping function  
function function_alert($message) {
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

// redirect user to login page if they're not logged in
if (empty($_SESSION['id'])) {
    header('location: login.php');
	exit();
}

// verify user with token 
if(isset($_GET['token']))
{
	$token=$_GET['token']; 
	verifyUser($token); 
}

	if( $_SESSION['verified'] ==0) {
		function_alert("Check your email if you want to verify your account now!"); 
	}
	else if($_SESSION['verified'] ==1){
		function_alert("Your account is verified!"); 
	}

	require_once 'index.html'; 
?>