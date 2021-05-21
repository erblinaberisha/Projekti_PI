<?php
require 'constants.php'; 

// Alert popping function  
function function_alert($message) {
  // Display the alert box 
  echo "<script>alert('$message');</script>";
}
$name1_error = $email_error = $phone_error = $date_error= $time_error = $person_error = "";
$name1 = $email = $phone = $date = $time = $people =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["date"])) {
        $date_error = "Date is required";
      } else {
        $date = test_input($_POST["date"]);
      }

      if (empty($_POST["time"])) {
        $time_error = "Date is required";
      } else {
        $time = test_input($_POST["time"]);
        
      }

      if (empty($_POST["people"])) {
        $person_error = "Numbers of people is required";
      } else {
        $people = test_input($_POST["people"]);
        
      }


    if (empty($_POST["name"])) {
      $name1_error = "Name is required";
    } else {
      $name1 = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
        $name1_error = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $email_error = "Invalid email format";
        }
      }

    if (empty($_POST["phone"])) {
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{3}/",$phone)) {
          $phone_error = "The phone number should be written like this ***-***-***";
        }
    }
    
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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