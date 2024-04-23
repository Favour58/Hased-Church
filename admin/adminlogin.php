<?php
include"../php/process.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hased_Church_login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1)
    }
    .login-header {
      text-align: center;
    }
    .login-header h2 {
      color: #007bff;
    }
    .login-form {
      margin-top: 30px;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-container">
          <div class="login-header">  
            <h2>Welcome...login</h2>
          </div>
          <form class="login-form" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="userName" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
            </div>
            <div class="form-group">
                  <p class="text-center" style="color:red;"><?php echo $error?></p>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="adminLogg">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
