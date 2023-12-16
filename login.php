<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
  <div class="card p-3">
  <h1>Login</h1>
    <form id="login-form" method="post">
    <div class="form-group">
        <label for="username">Username:</label>
        <input class="form-control" type="text" id="username" name="username" required><br>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="password" id="password" name="password" required><br>
     </div>
     <div class="form-group text-center">
     <button type="button" class="btn btn-primary" onclick="login()">Login</button>
     </div>
        <!-- Corrected the button type to "button" -->
    </form>
    <p class="mt-3">Register an account? <a href="register.php" id="login-link">Register</a></p>

</div>

</body>
</html>
