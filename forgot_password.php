<?php require_once 'controllers/authenticationController.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <title>Forgot Password</title>
</head>

<body>
  
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Recover your password</h3>

        <?php if (count($errors) > 0): ?>
          <div class="alert alert-danger">
             <?php foreach ($errors as $error): ?>
            <li>
               <?php echo $error; ?>
            </li>
            <?php endforeach;?>
          </div>
        <?php endif;?>
        
        <form action="forgot_password.php" method="post">
            <p>Plase enter the email you used to sign up to this website. We will assist you for password recovery. </p>
          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $email; ?>">
          </div>
         
          <div class="form-group">
            <button type="submit" name="forgot-password" class="btn btn-lg btn-block">Recover your password</button>
          </div>
        </form>
    
    </div>
  </div>
</body>
</html>