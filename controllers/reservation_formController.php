<?php
require 'constants.php'; 

// Alert popping function  
function function_alert($message) {
  // Display the alert box 
  echo "<script>alert('$message');</script>";
}

// If user submits the reservation form save values of input fields to database
if(isset($_POST['submit'])){

define('DATABASE','reservation'); 
$conn = new mysqli(DBHOST, DBUSER, DBPASS,DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
// Reale escape string , a way to protect from sql injection 
  $date = $conn -> real_escape_string($_REQUEST['date']);
  $time = $conn -> real_escape_string($REQUEST['time']);
  $people = $conn -> real_escape_string($_REQUEST['people']);
  $name = $conn -> real_escape_string($_REQUEST['name']);
  $email =$conn -> real_escape_string($_REQUEST['email']);
  $phone =$conn -> real_escape_string($_REQUEST['phone']);

  $sql = "INSERT INTO reserve  VALUES (reservationNr,'$date', 
  '$time','$people','$name','$email','$phone')";

// If query is executed succesfully notify user that reservation has been done 
if(mysqli_query($conn, $sql)){
  echo '<script type="text/javascript">'; 
  echo 'alert("Your reservation was succesfully made!");'; 
  echo 'window.location.href = "../reservation.php";';
  echo '</script>'; } 
else{
  echo "DATABASE ERROR: Sorry $sql. " 
      . mysqli_error($conn);
}

// Close the connection with database when done
mysqli_close($conn);}
?> 

</body> 
</html>