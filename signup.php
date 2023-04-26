<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
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
      font-weight:600;
      font-size:20px;
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
    input  {
      border-radius: 5px;
      box-shadow: none;
      padding: 10px;
    }
    .btn-signup {
      background-color: #007bff;
      border: none;
      border-radius: 25px;
      color: #fff;
      padding: 10px 20px;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }
    .btn-signup:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>
<?php include 'header.php';?>

  <div class="container">

    <div class="row justify-content-center mt-3">
    <?php
        if(isset($_REQUEST['done'])){
            ?>
            
             <div class="alert alert-warning">Congratulations You have been Registered ! <a href="login.php">Login Now ?</a></div>
                
                <?php
                }
                ?>
                 <?php 
        if(isset($_REQUEST['pwdwrong'])){
            ?>
             <div class="alert alert-warning">Check Your Password !</div>
                
                <?php
                }
                ?>
      <div class="col-md-5">
        <div class="card">
       
          <div class="card-header">
            Signup
          </div>
          <div class="card-body">
            <form action="userdata.php" method="post" >
              <div class="form-group">
                <label for="name">Full Name</label>
                <input required type="text" class="form-control" name="Username" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input required type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="email">Mobile Number</label>
                <input required type="number" class="form-control" name="mobilenumber" placeholder="Enter Mobile Number">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input required type="password" class="form-control" id="password1" name="password1" placeholder="Confirm Password">
              </div>
              <div class="m-2" id="CheckPasswordMatch"></div>
             <button type="submit" onclick="password()" class="btn btn-signup btn-primary btn-block">Signup</button>
            </form>
            <div class="text-center mt-3">
              Already have an account? <a href="login.php">Login here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
$(document).ready(function () {
   $("#password1").on('keyup', function(){
    var password = $("#password").val();
    var confirmPassword = $("#password1").val();
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
    else
        $("#CheckPasswordMatch").html("Password match !").css("color","green");
   });
});
</script>
</body>
</html>
