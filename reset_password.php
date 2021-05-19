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
  <title>Reset Password</title>
</head>

<body>
  
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Reset Password</h3>

        <?php if (count($errors) > 0): ?>
          <div class="alert alert-danger">
             <?php foreach ($errors as $error): ?>
            <li>
               <?php echo $error; ?>
            </li>
            <?php endforeach;?>
          </div>
        <?php endif;?>
        
        <form action="reset_password.php" method="post">
          <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="passwordConf" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="resetPassword-btn" class="btn btn-lg btn-block">Reset Password</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</body>
</html>