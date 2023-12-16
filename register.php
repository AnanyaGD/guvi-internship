<?php include 'register_handler.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/register.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="css/register.css">

  <title>User Registration and Login</title>
</head>
<body>
<div class="card mt-5">
  <h2>Register</h2>
  <div class="mt-3 p-5">
    <div class="">
      <form id="register-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input style="max-width:200px" type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input style="max-width:200px" type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
      <p class="mt-3">Already have an account? <a href="#" id="login-link">Login</a></p>
    </div>
  </div>
</div> 
  <script src="js/register.js"></script>
</body>
</html>
