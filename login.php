<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    .card-header {
      background-color: #007bff;
      border-radius: 10px 10px 0 0;
      color: #fff;
      text-align: center;
      text-transform: uppercase;
    }
    .card-body {
      padding: 30px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
    }
    input {
      border-radius: 5px;
      box-shadow: none;
      padding: 10px;
    }
    .btn-login {
      background-color: #007bff;
      border: none;
      border-radius: 25px;
      color: #fff;
      padding: 10px 20px;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }
    .btn-login:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
<?php include 'header.php';?>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="usercheck.php" method="post"  >
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="em" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
              </div>
              <?php 
        if(isset($_REQUEST['error'])){
            ?>
           
           <div class="alert alert-danger">Invalid User !</div>
                
                <?php
                }
                ?>
              <button type="submit" class="btn btn-login btn-primary btn-block">Login</button>
            </form>
            <div class="text-center mt-3">
              <a href="#">Forgot password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
