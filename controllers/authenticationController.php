<?php
require_once 'controllers/sendEmails.php';
require_once 'controllers/constants.php'; 

session_start();

$username = "";
$email = "";
$errors = [];

$conn = new mysqli(DBHOST, DBUSER, DBPASS,DBNAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username is required.';
    }
    
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    }
    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email_invalid'] = 'Invalid email format.';
    }
      
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password is required.';
    }
    else{
    $number = preg_match('@[0-9]@', $_POST['password']);
    $uppercase = preg_match('@[A-Z]@', $_POST['password']);
    $lowercase = preg_match('@[a-z]@', $_POST['password']);
    $specialChars = preg_match('@[^\w]@', $_POST['password']);
 
        if(strlen($_POST['password']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            $errors['password_invalid']="Password must be at least 8 characters long and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        }
        else if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
            $errors['passwordConf'] = 'The two passwords do not match.';
        }
    }
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists.";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO users SET username=?, email=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $username, $email, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // send verification email to user
             sendVerificationEmail($email, $token);

            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = 0;
            header('location: index.php');
            exit(0); 
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username or email required.';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required.';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE username=? OR email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);
       
        if ($stmt->execute()) {
            $result=$stmt->get_result();
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                header('location: index.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username or password.";
            }
        } else {
            $errors['db_error'] = " Login failed!";
            
        }
    }
}


//logout 

if(isset($_GET['logout'])){
   
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['verify']);
header("location: login.php");

}

// verify user 
function verifyUser($token){
    global $conn; 
    $sql = "SELECT * FROM users WHERE token='$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $query = "UPDATE users SET verified=1 WHERE token='$token'";

        if (mysqli_query($conn, $query)) {
            //log the user in 
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] =1;
            header('location: index.php');
            exit(0);
        }
    }
     else {
        echo "User not found!";
    }
}










