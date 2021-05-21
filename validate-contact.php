<?php
$name_error = $email_error = $message_error = $guest = "";
$name = $email = $message = $success = $guest_error ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $name_error = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $name_error = "Only letters and white space allowed";
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

      if (empty($_POST["guest"])) {
        $guest_error = "The field is required";
      } else {
        $guest = test_input($_POST["guest"]);
        
      }

    if (empty($_POST["message"])) {
        $message_error = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    
} 


if(isset($_POST['submit']))
  {
    if ($name_error == '' and $email_error == '' and $message_error == '' and $guest_error == '') {
      unset($_POST['submit']);
      
    $to_email = "foodhouserestaurant2021@gmail.com";
    
     
    if (mail($to_email, $name, $message)) {
        $success = "Email successfully sent to $to_email...";
    } else {
      $success = "Email sending failed...";
    }
    } 
  } 
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>